<?php
remove_action('wp_head', 'wp_generator');

//サイトナビゲーション用
register_nav_menus(array('gnav' => 'ナビゲーション'));

//アイキャッチ有効
add_theme_support('post-thumbnails');

//ショートコード
function uploadPath() { return content_url() . '/uploads/'; }
add_shortcode('uploadPath', 'uploadPath');

function homePath() { return home_url() . '/'; }
add_shortcode('homePath', 'homePath');

function enqueue_styles() {
    wp_enqueue_style('style main.min', get_template_directory_uri() . '/assets/css/main.min.css', true, rand());
}
add_action('wp_enqueue_scripts', 'enqueue_styles');

//add icon to menu item
add_filter('wp_nav_menu_objects', 'add_acf_fields_to_menu_items', 10, 2);

function add_acf_fields_to_menu_items($items, $args) {
    foreach ($items as $item) {
        // Lấy giá trị của custom field `icon_menu`
        $icon = get_field('icon_menu', $item);

        if (is_array($icon) && isset($icon['url'])) {
            // Nếu $icon là mảng, lấy URL của ảnh
            $icon_url = esc_url($icon['url']);
        } elseif (is_string($icon)) {
            // Nếu $icon là chuỗi, sử dụng trực tiếp
            $icon_url = esc_url($icon);
        } else {
            $icon_url = '';
        }

        if ($icon_url) {
            // Thêm HTML chứa hình ảnh vào title
            $item->title = '<span class="icon"><img src="' . $icon_url . '" alt="' . esc_attr($item->title) . '" class="menu-icon" /></span>' . '<span class="t-link">' . $item->title . '</span>';
        }

        $target_blank = get_field('target_blank', $item);

        if ($target_blank === 'Yes') {
            $item->url = str_replace('<a ', '<a target="_blank" ', $item->url);
        }
    }
    return $items;
}

//ウィジェット
function my_theme_widgets_init() {
	register_sidebar( array(
		'name' => 'ウィジェットエリア',
		'id' => 'widgets',
		'before_widget' => '<div class="widget-item">',
		'after_widget' => '</div>',
		'before_title' => '<h2 class="widget-title">',
		'after_title' => '</h2>'
	));
}
add_action('widgets_init', 'my_theme_widgets_init');

if ( ! function_exists( 'gms_get_day_locale_en' ) ) {
	/**
     * @param int $day_num
     *
     * @return string
     */
	function gms_get_day_locale_en( $day_num ) {
		$day_num = (int) $day_num;
		$days = ['SUN','MON', 'TUE', 'WED', 'THU', 'FRI', 'SAT'];
		if ( in_array( $day_num, array_keys( $days ), true ) ) {
			return $days[ $day_num ];
		} else {
			return '';
		}
	}
}

if ( ! function_exists( 'gms_get_day_locale' ) ) {
	/**
     * @param int $day_num
     *
     * @return string
     */
	function gms_get_day_locale( $day_num ) {
		$day_num = (int) $day_num;
		$days = ['日','月', '火', '水', '木', '金', '土'];
		if ( in_array( $day_num, array_keys( $days ), true ) ) {
			return $days[ $day_num ];
		} else {
			return '';
		}
	}
}

/* Validate Contact-Form-7 */

add_filter( 'wpcf7_validate_email*', 'custom_email_confirmation_validation_filter', 20, 2 );

function custom_email_confirmation_validation_filter( $result, $tag ) {
	$tag = new WPCF7_Shortcode( $tag );

	if ( 'your-email-confirm' == $tag->name ) {
		$your_email         = isset( $_POST['your-email'] ) ? trim( $_POST['your-email'] ) : '';
		$your_email_confirm = isset( $_POST['your-email-confirm'] ) ? trim( $_POST['your-email-confirm'] ) : '';

		if ( $your_email != $your_email_confirm ) {
			$result->invalidate( $tag, "メールアドレスは一致ではありません。" );
		}
	}

	return $result;
}

/* send mail wp_mail() */

add_action('wp_ajax_submit_contact_form', 'submit_contact_form');
add_action('wp_ajax_nopriv_submit_contact_form', 'submit_contact_form');

function submit_contact_form() {
	// Get form data
	parse_str($_POST['form_data'], $form_data);

	// Get other form values
	$your_com = sanitize_text_field($form_data['your_com']);
	$your_name = sanitize_text_field($form_data['your_name']);
	$your_mail = sanitize_email($form_data['your_mail']);
	$title_post = sanitize_text_field($form_data['title_post']);


	// Get recipient email
	$to = 'h1hayashida@cam-com.jp';

	// Email subject
	$subject1 = '【資料/動画ダウンロードがありました】GMS';
	$subject2 = '【GMS】お問い合わせを受け付けました（資料/動画ダウンロード）';

	// Email body
	$body .= "海外人材マネジメントサービスGMSへ \n";
	$body .=  "下記のお客様より資料/動画ダウンロードがありました。 \n";

	$body .= "-------------------------------------- \n";

	$body .= " $title_post \n";

	$body .= "-------------------------------------- \n";

	$body .= "お名前： $your_com\n";
	$body .= "会社名： $your_name\n";
	$body .= "メールアドレス： $your_mail\n";

	$body .= "動画のリンク ：\n";

	for ($x = 1; $x <= sanitize_text_field($form_data['hidden_field']); $x++) {
		$idxField = 'hidden_field_'.$x;
		if($idxField !== '') {
			$body .= sanitize_text_field($form_data[$idxField])."\n";
		}
	}


	$heredoc_a = <<<HEREA
    $name様

この度はGMS海外人材マネジメントサービスの資料/動画タイトルよりダウンロード頂き、
ありがとうございます。

----------------------------------------

資料/動画をご覧いただき、ご不明点などございましたら、お気軽にご相談ください。 

今後ともよろしくお願いいたします。


【お名前】
$your_com
【会社名】
$your_name
【メールアドレス】
$your_mail
資料/動画タイトル : 
$title_post

*****************************************************

海外人材マネジメントサービスGMS
運営：株式会社キャムテック
〒105-5116
東京都港区浜松町2-4-1　世界貿易センタービルディング南館 16F
TEL：03-6837-5300
FAX：03-6837-5301　
WEB：http://www.ca-m.co.jp/

*****************************************************

 ※本メールはシステムより自動送信されています。
 　お心当たりのない場合は、大変恐れ入りますが
 　本メールを破棄していただきますようお願いいたします。
==========================================
--
このメールはGMS(https://gms.ca-m.co.jp/) のお問い合わせフォームから送信されました。
HEREA;

	// Send email
	//     $sent = wp_mail($to, $subject, $body);

	// Send first email
	$headers1[] = 'Bcc: mafujii@sougo-group.jp';
	$headers1[] = 'Bcc: ymatsuza@sougo-group.jp';
	$headers1[] = 'Bcc: yoyama@sougo-group.jp';
	$headers1[] = 'Bcc: samejima@sougo-group.jp';
	$headers1[] = 'Bcc: ydoke@sougo-group.jp';
	$headers1[] = 'Bcc: y1oku@sougo-group.jp';
	$headers1[] = 'Bcc: nmae@sougo-group.jp';
	$headers1[] = 'Bcc: h1hayashida@sougo-group.jp';

	$headers2[] = 'Bcc: ymatsuza@sougo-group.jp';
	$headers2[] = 'Bcc: h1hayashida@sougo-group.jp';


	if (wp_mail($to, $subject1, $body, $headers1)) {
		echo 'First email sent successfully.<br>';
	} else {
		echo 'Error sending first email.<br>';
	}

	// Send second email
	if (wp_mail($to, $subject2, $heredoc_a, $headers2)) {
		echo 'Second email sent successfully.<br>';
	} else {
		echo 'Error sending second email.<br>';
	}


	if ($sent) {
		echo 'success';
	} else {
		echo 'error';
	}

	wp_die();
}

// Change the From address.
add_filter( 'wp_mail_from', function ( $original_email_address ) {
	return 'doangiang665@gmail.com';
} );

// Change the From name.
add_filter( 'wp_mail_from_name', function ( $original_email_from ) {
	return 'CAMTECライフサポート ';
} );

/**
 * contact-form-7 ひらがな
 *
 */
add_filter( 'wpcf7_validate_text', 'wpcf7_validate_kana', 11, 2 );
add_filter( 'wpcf7_validate_text*', 'wpcf7_validate_kana', 11, 2 );
function wpcf7_validate_kana( $result, $tag ) {

	$tag  = new WPCF7_Shortcode( $tag );
	$name = $tag->name;

	$value = isset($_POST[$name]) ? trim(wp_unslash(strtr((string) $_POST[$name], "\n", " "))) : "";

	// furiganaはフォーム側のnameです
	if ( $name === "kana" ) {
		// カタカナの場合
		if ( !preg_match( "/^[ぁ-ん]+$/u", $value ) ) {
			$result->invalidate( $tag, "全角ひらがなで入力してください。" );
		}
	}



	return $result;
}

add_filter( 'wpcf7_validate_tel', 'wpcf7_validate_tel', 11, 2 );
add_filter( 'wpcf7_validate_tel*', 'wpcf7_validate_tel', 11, 2 );
function wpcf7_validate_tel( $result, $tag ) {

	$tag  = new WPCF7_Shortcode( $tag );
	$name = $tag->name;

	$value = isset( $_POST[ $name ] ) ? trim( wp_unslash( strtr( (string) $_POST[ $name ], "\n", " " ) ) ) : "";

	if ( $name === "tel" ) {
		if ( !preg_match( "/^[0-9]*$/", $value ) ) {
			$result->invalidate( $tag, "電話番号に間違いがあります。" );
		}
	}
	return $result;
}


add_filter( 'wp_mail_smtp_core_wp_mail_function_incorrect_location_notice', '__return_false' );

// MV WP Form
function my_mwform_1389_value( $value, $name ) {
	global $post;
	if ( $name === 'doc_title' ) {
		return get_the_title();
	}elseif($name === 'doc_link'){
		$link = get_field( 'file' , get_the_ID());
		if($link){
			return $link['url'];
		}
		$url = get_field( 'url' , get_the_ID());
		if($url){
			return $url;
		}
	}
	return $value;

}
add_filter( 'mwform_value_mw-wp-form-1389', 'my_mwform_1389_value', 10, 2 );

function my_mwform_2102_value( $value ) {
	return $value;
}
add_filter( 'mwform_value_mw-wp-form-2102', 'my_mwform_2102_value', 10, 2 );

// Add delete AIOSEO to page
add_filter( 'aioseo_disable', 'aioseo_disable_term_output' );

function aioseo_disable_term_output( $disabled ) {
	if (is_page('camcat_manual') || is_post_type_archive('manual_qa') ||  is_tax('mannual_tag')) {
		return true;
	}
	return false;
}

// Short Code Download Contact Form 7
wpcf7_add_form_tag('get_title_download', 'custom_get_title_download_shortcode_handler');
function custom_get_title_download_shortcode_handler() {	
	ob_start();               
	$args = array(
		'post_type' => 'seminar',
	);
	$post = get_posts($args);
	$post_id = $post->ID;
	$post_title = get_the_title($post_id);

?>
<input type="hidden" class="download_id_selected 322424234" name="get_title_download" value="<?= $post_title; ?>"/>
<?php                  
	return ob_get_clean();
}



// Short Code Download Contact Form 7 - get link download video
wpcf7_add_form_tag('get_url_video_download', 'custom_get_url_download_video_shortcode_handler');
function custom_get_url_download_video_shortcode_handler() {	
	ob_start();               
	$args = array(
		'post_type' => 'seminar',
	);
	$post = get_posts($args);
	$post_id = $post->ID;
	$post_title = get_the_title($post_id);
	$post_movie_url = get_field('seminar_movie_url', $post_id);

?>
<input type="hidden" class="download_id_selected_video" name="get_url_video_download" value="<?= $post_movie_url; ?>"/>
<?php                  
	return ob_get_clean();
}




wpcf7_add_form_tag('download_item', 'custom_download_item_shortcode_handler');

function custom_download_item_shortcode_handler() {
	ob_start();
	if (is_page('confirm_download')) { ?>
<p class="download-list-heading">
	<span class="span-es">REPORT DOWNLOAD</span><br><span>資料ダウンロード</span>
</p>
<div class="download-selected">
	<p class="selected-ttl">選択した資料</p>
	<ul class="selected-list">
		<?php
		if ($_POST['download_id']) {
			$list_id = $_POST['download_id'];
			if ($_POST['submitConfirm']) {
				$list_id = explode(',', $_POST['download_id']);
			}
		}
		else {                          
			$list_id = explode(',', $_GET['id']);                    
		}  

		$args = array(
			'post_type'      => 'download',
			'posts_per_page' => -1,
			'post__in'		 => $list_id
		);

		//die($list_id.'');

		$post = get_posts($args);

		foreach($post as $post) {
			$post_id = $post->ID;
			$post_link = get_the_permalink($post_id);
			$post_title = get_the_title($post_id);
			$arr_link[] = $post_title.PHP_EOL.$post_link.PHP_EOL; 
		?>
		<li class="selected-list-item">
			<input type="checkbox" id="download_id_selected" class="download_id_selected" name="download_id_selected[]" value="<?= $post_id; ?>" checked disabled />
			<span><?= esc_html( $post_title ); ?></span>
		</li>
		<?php
		}
		if($arr_link ) {
			$arr_link = implode(PHP_EOL, $arr_link);
		}


		?> <input type="hidden" name="download_item_link" value="<?= $arr_link; ?>"><?php
		?>
	</ul>
</div>
<?php }	
	return ob_get_clean();
}

wpcf7_add_form_tag('download_item_upgrade', 'custom_download_item_upgrade_shortcode_handler');

function custom_download_item_upgrade_shortcode_handler() {
	ob_start();
	if (is_page('confirm_download_upgrade')) { ?>
<p class="download-list-heading">
	<span class="span-es">REPORT DOWNLOAD</span><br><span>資料ダウンロード</span>
</p>
<div class="download-selected">
	<p class="selected-ttl">選択した資料</p>
	<ul class="selected-list">
		<?php
		if ($_POST['download_id']) {
			$list_id = $_POST['download_id'];
			if ($_POST['submitConfirm']) {
				$list_id = explode(',', $_POST['download_id']);
			}
		}
		else {                          
			$list_id = explode(',', $_GET['id']);                    
		}  

		$args = array(
			'post_type'      => 'download',
			'posts_per_page' => -1,
			'post__in'		 => $list_id
		);

		//die($list_id.'');

		$post = get_posts($args);

		foreach($post as $post) {
			$post_id = $post->ID;
			$post_link = get_the_permalink($post_id);
			$post_title = get_the_title($post_id);
			$arr_link[] = $post_title.PHP_EOL.$post_link.PHP_EOL; 
		?>
		<li class="selected-list-item">
			<input type="checkbox" id="download_id_selected" class="download_id_selected" name="download_id_selected[]" value="<?= $post_id; ?>" checked disabled />
			<span><?= esc_html( $post_title ); ?></span>
		</li>
		<?php
		}
		if($arr_link ) {
			$arr_link = implode(PHP_EOL, $arr_link);
		}


		?> <input type="hidden" name="download_item_link" value="<?= $arr_link; ?>"><?php
		?>
	</ul>
</div>
<?php }	
	return ob_get_clean();
}

// Allow custom shortcodes in CF7 HTML form
add_filter( 'wpcf7_form_elements', 'dacrosby_do_shortcodes_wpcf7_form' );
function dacrosby_do_shortcodes_wpcf7_form( $form ) {
	$form = do_shortcode( $form );
	return $form;
}

function change_translate_text( $translated_text ) {
	if ( 'Confirm'  === $translated_text ) {
		$translated_text = '確認画面へ';
	}
	elseif ( 'To correct'  === $translated_text ) {
		$translated_text = '確認画面へ';
	}
	elseif ( 'Please enter the required items.'  === $translated_text ) {
		$translated_text = '必須項目に入力してください。';
	}
	elseif ( 'The email address format doesn`t seem to be correct.'  === $translated_text ) {
		$translated_text = '入力されたメールアドレスに間違いがあります。';
	}
	elseif ( 'The confirmation email addresses do not match.'  === $translated_text ) {
		$translated_text = 'メールアドレスは一致ではありません';
	}
	elseif ( 'The phone number is incorrect.'  === $translated_text ) {
		$translated_text = '電話番号に間違いがあります。';
	}
	elseif ( 'There is a mistake in the URL.'  === $translated_text ) {
		$translated_text = 'URLに誤りがあります。';
	}
	return $translated_text;
}
add_filter( 'gettext', 'change_translate_text', 20 );

/* Export Excel for QA */
function admin_post_add_export_button( $which ) {
	global $typenow;
	if ( 'qa_detail'=== $typenow && 'top'=== $which ) {
?>
<a href="<?php echo admin_url( "admin.php?page=excel-importer%2Fexcel_importer.php"); ?>" class="button button-secondary">Import</a>        
<input type="submit" name="export_all_posts" class="button button-primary" value="<?php _e('Export'); ?>"/>
<?php
													  }
}
add_action('manage_posts_extra_tablenav', 'admin_post_add_export_button', 20, 1);

function func_export_all_posts()
{
	if (isset($_GET['export_all_posts']))
	{
		if( $_GET['post_status'] == "all"){
			$arg = array(
				'post_type' => 'qa_detail',
				'post_status' => 'any',
				'posts_per_page' => - 1,
			);
		} else {
			$arg = array(
				'post_type' => 'qa_detail',
				'post_status' => 'publish',
				'posts_per_page' => - 1,
				'suppress_filters' => 0
			);
		}

		$posts = get_posts($arg);
		$today = date('Y-m-d');

		if ($posts)
		{
			include_once('export/xlsxwriter.class.php');

			$fileName = 'qa['.$today.'].xlsx';
			$header = array(
				'ID' =>'string',
				'CheckSeriver' =>'string',
				'ステータス'=>'string',
				'Q補足情報'=>'string',
				'A'=>'string',
				'A補足情報'=>'string',
				'カテゴリー'=>'string',
				'公開済み' =>'string',
				'関連記事' =>'string',
			);

			foreach($posts as $post) {
				$qa_id = $post->ID;
				$qa_status = get_post_status($qa_id);
				$qa_q = $post->post_title;
				$qa_a = get_field('qa-answer-ttl', $qa_id);
				$qa_a_txt = get_field('qa-answer-txt', $qa_id);
				//                  $qa_a = nl2br(strip_tags(get_field('qa-answer-ttl', $qa_id), '<strong><b><i>'));
				//                 $qa_a_txt = nl2br(strip_tags(get_field('qa-answer-txt', $qa_id), '<strong><b><i>'));
				//                 $qa_a_txt= str_replace('<br />', "", $qa_a_txt);
				$qa_date = date("Y/m/d", strtotime($post->post_date));
				if (get_field('faq-answer-txt', $qa_id)) {
					$faq_a_txt = strip_tags(get_field('faq-answer-txt', $qa_id));
				}
				else {
					$faq_a_txt = '';
				}                
				//$qa_link = get_the_permalink($qa_id);

				$qa_list_cat = [];
				$terms = get_the_terms($qa_id, 'qa_list' );
				if ( $terms && ! is_wp_error( $terms ) ) {
					foreach ($terms as $term) {
						$qa_list_cat[] = $term->name;
					}
					$qa_cat = implode(',', $qa_list_cat);
				}

				$CheckService_list = [];
				$CheckServices = get_field('checkservice', $qa_id);
				$related_qa = get_field('related_qa', $qa_id);

				if ( $CheckServices ) {
					foreach ($CheckServices as $CheckService) {
						$CheckService_list[] = $CheckService;
					}
					$qa_service = implode(',', $CheckService_list);
				}
				else {
					$qa_service = '';
				}

				$rows[] = array($qa_id,$qa_service, $qa_status, $qa_q, $qa_a, $qa_a_txt, $qa_cat, $qa_date, $related_qa);
			}

			$writer = new XLSXWriter();
			$writer->writeSheetHeader('Sheet1', $header);
			foreach($rows as $row){
				$writer->writeSheetRow('Sheet1', $row);
			}
			$writer->writeToFile($fileName);

			header('Content-Description: File Transfer');
			header("Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet");
			header("Content-Disposition: attachment; filename=" . basename($fileName));
			header("Content-Transfer-Encoding: binary");
			header("Expires: 0");
			header("Pragma: public");
			header("Cache-Control: must-revalidate, post-check=0, pre-check=0");
			header('Content-Length: ' . filesize($fileName));

			ob_clean();
			flush();
			readfile($fileName);
			unlink($fileName);
			exit();
		}
	}
}
add_action('init', 'func_export_all_posts');

// Add Heading to Seminar
function seminar_columns_head($defaults)
{
	global $post_type;

	if('seminar' == $post_type) {
		$defaults['seminar_start_date'] = 'Start Date';       
		$defaults['seminar_close_date'] = 'Close Date';  

	}
	return $defaults;
}
add_filter('manage_seminar_posts_columns', 'seminar_columns_head');

function seminar_columns_content($column, $post_ID)
{    
	if ( $seminar_date = get_field('seminar_date') ) {
		date_default_timezone_set("Asia/Tokyo");   

		$seminar_start_date = $seminar_date['seminar_start_date'];
		$seminar_close_date = $seminar_date['seminar_close_date'];
		//echo (strtotime(date('Y-m-d H:i:s')) . $seminar_close_date);
		if ($column == 'seminar_start_date') {                           
			if (!empty($seminar_start_date)) echo $seminar_start_date;
		}
		if ($column == 'seminar_close_date') {                           
			if (!empty($seminar_close_date)) {

				if (time() - strtotime($seminar_close_date) > 0) {
					echo '<span style="color: red;">'.$seminar_close_date.'</span>';
				}
				else {
					echo $seminar_close_date;
				}
			} 
		}
	}   
}
add_action('manage_seminar_posts_custom_column', 'seminar_columns_content', 10, 2);

function tst($args) {
	$args['checked_ontop'] = false;
	return $args;
}
add_filter('wp_terms_checklist_args','tst');




add_action( 'init', 'create_tag_taxonomies', 0 );

//create two taxonomies, genres and tags for the post type "tag"
function create_tag_taxonomies()
{
	// Add new taxonomy, NOT hierarchical (like tags)
	$labels = array(
		'name' => _x( 'Tags Q&A', 'taxonomy general name' ),
		'singular_name' => _x( 'Tags Q&A', 'taxonomy singular name' ),
		'search_items' =>  __( 'Search Tags' ),
		'popular_items' => __( 'Popular Tags' ),
		'all_items' => __( 'All Tags' ),
		'parent_item' => null,
		'parent_item_colon' => null,
		'edit_item' => __( 'Edit Tag' ),
		'update_item' => __( 'Update Tag' ),
		'add_new_item' => __( 'Add New Tag' ),
		'new_item_name' => __( 'New Tag Name' ),
		'separate_items_with_commas' => __( 'Separate tags with commas' ),
		'add_or_remove_items' => __( 'Add or remove tags' ),
		'choose_from_most_used' => __( 'Choose from the most used tags' ),
		'menu_name' => __( 'Tags Q&A' ),
	);

	register_taxonomy('qa-tag','qa_detail',array(
		'hierarchical' => false,
		'labels' => $labels,
		'show_ui' => true,
		'update_count_callback' => '_update_post_term_count',
		'query_var' => true,
		'rewrite' => array( 'slug' => 'qa-tag' ),
	));
}


?>