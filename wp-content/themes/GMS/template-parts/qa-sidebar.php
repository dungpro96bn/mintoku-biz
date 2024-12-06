<div class="category-seminar">
    <?php 
    $args = array(       
        'taxonomy' => 'qa_list',
        'post_status' => 'publish',
//         'hide_empty' => false,
        'parent' => 0
    );
    //$count_posts = wp_count_posts('qa_detail')->publish;    
    $query = new WP_Query(array('post_type'=>'qa_detail', 'post_status'=>'publish'));
    $count_posts = $query->found_posts;
    ?>
    <div class="subMenu">
        <ul class="sub-listMenu">
            <li class="sub-itemMenu <?php if(is_post_type_archive('qa_detail')) echo 'is-active '; ?>all">
                <a href="<?php echo home_url(); ?>/qa" title="すべて">すべて (<?php echo $count_posts; ?>)</a>
            </li>
            <?php
            $cats = get_categories($args);
            ob_start();
            foreach ($cats as $cat) {
                if (stripos( $_SERVER['REQUEST_URI'] , $cat->slug ) !== false) {
                    $is_active =  ' is-active';
                }
                else {
                    $is_active =  '';
                }
                $cat_link = get_category_link($cat->term_id);
                echo '<li class="sub-itemMenu'.$is_active.'"><a href="'.$cat_link.'" title="'.$cat->name.'">'.$cat->name.'（ '. $cat->count . '）</a></li>';
            }
            $cat_list = ob_get_contents();
            ob_end_clean();
            echo $cat_list;
            ?>
        </ul>
    </div>
</div>