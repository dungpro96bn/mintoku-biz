<?php
/*
Plugin Name: Excel Importer
Description: Import data as posts from a xls(xlsx) file.
Version: 1.0
Author: Vinh Ha
*/

/** 
 * @author    Vinh Ha <vinhha.it@gmail.com>
 * @copyright 2022 by Vinh Ha
 * @license   The MIT License 
 */

class XLSImporterPlugin { 
    var $headers = array(     
        'df_ID',
        'checkservice',
        'df_status',
        'df_title',
        'qa-answer-ttl',
        'qa-answer-txt',
        'df_tax',
        'df_date',
        'related_qa',        
    );    

    var $log = array();
    
    function process_option($name, $default, $params) {
        if (array_key_exists($name, $params)) {
            $value = stripslashes($params[$name]);
        } elseif (array_key_exists('_'.$name, $params)) {
            // unchecked checkbox value
            $value = stripslashes($params['_'.$name]);
        } else {
            $value = null;
        }
        $stored_value = get_option($name);
        if ($value == null) {
            if ($stored_value === false) {
                if (is_callable($default) &&
                    method_exists($default[0], $default[1])) {
                    $value = call_user_func($default);
                } else {
                    $value = $default;
                }
                add_option($name, $value);
            } else {
                $value = $stored_value;
            }
        } else {
            if ($stored_value === false) {
                add_option($name, $value);
            } elseif ($stored_value != $value) {
                update_option($name, $value);
            }
        }
        return $value;
    }

    function form() {
        $opt_draft = $this->process_option('excel_importer_import_as_draft',
            'publish', $_POST);
        
        $opt_override = $this->process_option('excel_importer_import_override_exist_posts',
            'null', $_POST);

        if ('POST' == $_SERVER['REQUEST_METHOD']) {
            $this->post(compact('opt_draft', 'opt_override'));
        }
        
        $sample_file =  plugin_dir_url(__FILE__) . 'examples/sample_qa.xlsx';
       
        ?>

        <div class="wrap">
            <h1 class="wp-heading-inline">Excel Importer</h1>    
            <form class="add:the-list: validate" method="post" enctype="multipart/form-data" accept-charset="utf-8">
                <!-- Override existing posts -->    
                <p>
                    <input name="_excel_importer_import_override_exist_posts" type="hidden" value="publish" />
                    <label><input name="excel_importer_import_override_exist_posts" type="checkbox" <?php if ('override' == $opt_override) { echo 'checked="checked"'; } ?> value="override" />Overwrite</label><br />
                    <small>Overwrite data if posts have the same ID</small>
                </p>    
            
                <!-- Import as draft -->
                <p>
                    <input name="_excel_importer_import_as_draft" type="hidden" value="publish" />
                    <label><input name="excel_importer_import_as_draft" type="checkbox" <?php if ('draft' == $opt_draft) { echo 'checked="checked"'; } ?> value="draft" /> Create <b>draft</b> status for imported data</label><br />
                    <small>The data in the excel file does not have status, the new status will be <b>draft</b></small>
                </p>

                <!-- File input -->
                <p>            
                    <label><span style="color:red">Only .xls(.xlsx) are supported</span></label><br />
                    <label>Sample data <a href="<?php echo $sample_file ?>" title="Click here to download sample excel file">Download here</a></label><br />
                    <label for="excel_import">Select file</label><br/>
                    <input name="excel_import" id="excel_import" type="file" value="" />
                </p>
                <p class="submit">
                    <input type="submit" class="button" name="submit" value="Import" />
                </p>
            </form>
        </div>
    <?php }       

    function print_messages() {
        if (!empty($this->log)) { ?> 
            <div class="wrap">
                <?php if (!empty($this->log['error'])): ?>
                    <div class="error">
                        <?php foreach ($this->log['error'] as $error): ?>
                            <p><?php echo $error; ?></p>
                        <?php endforeach; ?>
                    </div>
                <?php endif; ?>

                <?php if (!empty($this->log['notice'])): ?>
                    <div class="updated fade">
                        <?php foreach ($this->log['notice'] as $notice): ?>
                            <p><?php echo $notice; ?></p>
                        <?php endforeach; ?>
                    </div>
                <?php endif; ?>
            </div>

            <?php
            $this->log = array();
        }
    }

    function post($options) {        
        if (empty($_FILES['excel_import']['tmp_name'])) {
            $this->log['error'][] = 'No file uploaded, aborting';
            $this->print_messages();
            return;
        }
    
        if ($_FILES['excel_import']['type'] != 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet') {
            $this->log['error'][] = 'The file uploaded is not correct type, aborting';
            $this->print_messages();
            return;
        }

        if (!current_user_can('publish_pages') || !current_user_can('publish_posts')) {
            $this->log['error'][] = 'You don\'t have the permissions to publish posts and pages. Please contact the blog\'s administrator.';
            $this->print_messages();
            return;
        }

        // Import library
        include "xlsx.php";
        
        $time_start = microtime(true);
      
        $file = $_FILES['excel_import']['tmp_name'];      
        $excel = SimpleXLSX::parse($file);
       
        $skipped = 0;
        $imported = 0; 

        $rows = $header_values = [];
        foreach ( $excel->rows() as $k => $r ) {
            if ( $k === 0 ) {
                $header_values = $r;
                continue;
            }
            $rows[] = array_combine( $header_values, $r );
        }

        //print_r($rows); die();        

        foreach ($rows as $excel_data) {             
            if (!array_key_exists('ID', $excel_data)) {
                $this->log['error'][] = 'The file uploaded is not correct format, aborting';
                $this->print_messages();
                return;
            }
            else {
                if ($post_id = $this->create_post($excel_data, $options)) {
                    $imported++;                
                    $this->create_custom_fields($post_id, $excel_data);
                } else {
                    $skipped++;
                }
            }            
        }        

        if (file_exists($file)) {
            @unlink($file);
        }

        $exec_time = microtime(true) - $time_start;

        if ($skipped) {
            $this->log['notice'][] = "<b>Skipped {$skipped} posts.</b>";
        }
        $this->log['notice'][] = sprintf("<b>Imported {$imported} posts in %.2f seconds.</b>", $exec_time);
        $this->print_messages();
    }

    function create_post($data, $options) {
        $opt_draft = isset($options['opt_draft']) ? $options['opt_draft'] : null;
        $opt_override = isset($options['opt_override']) ? $options['opt_override'] : null; 
   
        $data = array_combine($this->headers, $data);

        //print_r($data); die();
        
        $post_type = 'qa_detail';  
        $valid_type = (function_exists('post_type_exists') && post_type_exists($post_type));

        if (!$valid_type) {
            $this->log['error']["type-{$post_type}"] = sprintf(
                'Unknown post type "%s".', $post_type);
        }        

        $post_id = $data['df_ID'];
        $post_title = convert_chars($data['df_title']);       
       
        // Status
        $status = convert_chars($data['df_status']);                              
        
        if ($opt_override == 'override' && get_post_type($post_id) == $post_type && get_post_status($post_id) != 'trash') { 
            $post_status = $status;                
        }
        else {
            if ($status != '') {
                $post_status = $status;
            }
            else {
                $post_status = $opt_draft;
            }            
        } 
       
        $post_date = $this->parse_date($data['df_date']);
        
        // Category
        $tax_input = $this->get_taxonomies($data);                       
        
        $new_post = array(
            'post_type'    => $post_type,
            'post_title'   => $post_title,           
            'post_status'  => $post_status,            
            'post_date'    => $post_date,
            'tax_input'    => $tax_input,            
        );     
        
        if ($opt_override == 'override') {   
            if ( get_post_type($post_id) == $post_type && get_post_status($post_id) != 'trash') {
                $new_post['ID'] = $post_id;                                       
                $id = wp_update_post($new_post);
            }
            else {
                $new_post['post__not_in'] = $post_id;  
                $id = wp_insert_post($new_post);
            }
        }
        else {
            $new_post['post__not_in'] = $post_id;
            $id = wp_insert_post($new_post);
        }                     
        
        return $id;
    }

    function get_taxonomies($data) {
        $taxonomies = array();        
        foreach ($data as $k => $v) {                  
            if ($k == 'df_tax') {                                   
                $t_name = 'qa_list';     
                if ($this->taxonomy_exists($t_name)) {
                    
                    $taxonomies[$t_name] = $this->create_terms($t_name,
                        $data[$k]);
                } else {
                    $this->log['error'][] = "Unknown taxonomy $t_name";
                }
            }
        }       
        return $taxonomies;
    }

    function create_terms($taxonomy, $field) {        
        if (is_taxonomy_hierarchical($taxonomy)) {
            $term_ids = array();
            foreach ($this->_parse_tax($field) as $row) {  
                foreach($row as $item) {
                    if ($item) {  
                        $term = $this->term_exists($item, $taxonomy);
                       
                        if ($term) {
                            $item_id = $term['term_id'];
                        } else {
                            $term_insert = wp_insert_term($item, $taxonomy);
                            $item_id = $term_insert['term_id'];                         
                        }
                        
                        if (!is_wp_error($term)) {                           
                            $term_ids[] = $item_id;
                        }                         
                    } 
                }
            }            
            return $term_ids;
        } else {
            return $field;
        }
    }

    function term_exists($term, $taxonomy = '') {
        if (function_exists('term_exists')) { 
            return term_exists($term, $taxonomy);
        } else {
            return is_term($term, $taxonomy);
        }
    }

    function taxonomy_exists($taxonomy) {
        if (function_exists('taxonomy_exists')) {
            return taxonomy_exists($taxonomy);
        } else {
            return is_taxonomy($taxonomy);
        }
    }

    function _parse_tax($field) {
        $data = array();            
        if (function_exists('str_getcsv')) { 
            $lines = $this->split_lines($field);  
            
            foreach ($lines as $line) {
                $data[] = str_getcsv($line, ',', '"');                   
            }                 
        } else {            
            $handle = tmpfile();
            fwrite($handle, $field);
            fseek($handle, 0);

            while (($r = fgetcsv($handle, 999999, ',', '"')) !== false) {
                $data[] = $r;
            }
            fclose($handle);
        }      
        return $data;
    }
    
    function split_lines($text) {
        $lines = preg_split("/(\r\n|\n|\r)/", $text);
        return $lines;
    }

    function create_custom_fields($post_id, $data) {
        $post_type = 'qa_detail';
        $opt_override = $this->process_option('excel_importer_import_override_exist_posts',
            'null', $_POST);
       
        $rows = array_combine($this->headers, $data);      
        //print_r(array_keys($rows)); die();
            
        foreach ($rows as $k => $v) {
            // field that do not start with df_ is a custom field
            
            if (!preg_match('/^df_/', $k) && $v != '') { 
                if ($k === 'checkservice') {
                    $v = explode(',', $v);                                      
                }
                
                if ($opt_override == 'override' && get_post_type($post_id) == $post_type && get_post_status($post_id) != 'trash') {   
                    update_post_meta($post_id, $k, $v, false);     
                }
               
                add_post_meta($post_id, $k, $v, false);                
            }
        }        
    }

    function parse_date($data) {
        $timestamp = strtotime($data);
        if (false === $timestamp) {
            return '';
        } else {
            return date('Y-m-d H:i:s', $timestamp);
        }
    }

    function stripBOM($fname) {
        $res = fopen($fname, 'rb');
        if (false !== $res) {
            //$bytes = fread($res, filesize($fname));
            $bytes = fread($res, 3);
            if ($bytes == pack('CCC', 0xef, 0xbb, 0xbf)) {
                $this->log['notice'][] = 'Getting rid of byte order mark...';
                fclose($res);
                
                $contents = file_get_contents($fname);               
              
                if (false === $contents) {
                    trigger_error('Failed to get file contents.', E_USER_WARNING);
                }
                $contents = substr($contents, 3);
                $success = file_put_contents($fname, $contents);
                if (false === $success) {
                    trigger_error('Failed to put file contents.', E_USER_WARNING);
                }
            } else {
                fclose($res);
            }
        } else {
            $this->log['error'][] = 'Failed to open file, aborting.';
        }
    }
}

function excel_admin_menu() {
    require_once ABSPATH . '/wp-admin/admin.php';
    $plugin = new XLSImporterPlugin;
    add_management_page('Excel Importer', 'Excel Importer', 'manage_options', __FILE__,
        array($plugin, 'form'));
}

add_action('admin_menu', 'excel_admin_menu');

?>
