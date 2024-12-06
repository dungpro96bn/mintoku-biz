<?php
    get_header();
	global $post, $wp, $wp_query;
?>

<div id="allSeminar" class="columns-container">
    <div class="pageTitle">
        <h2><span class="en">SEMINAR INFORMATION</span>外国人採用に関する<br class="sp-br">セミナー情報</h2>
    </div>
    <div id="breadcrumb" class="breadcrumb">
        <ol>
            <li>
                <a href="<?php echo home_url(); ?>">トップページ</a>&nbsp;&nbsp;<i class="fa-solid fa-chevron-right"></i>
            </li>
            <li>
                <span>外国人採用に関するセミナー情報</span>
            </li>
        </ol>
    </div>

    <div class="inner">
        <div class="content-main">
            <h3 class="title-seminar">開催済みセミナーをカテゴリーで探す <span class="note-title">開催済みのセミナーは資料ダウンロード可能です</span></h3>
        </div>
        <div class="block-main flex">
            <div class="category-seminar" data-aos="fade-up">
                <?php
                    $args = array(
                        'taxonomy' => 'seminar_tag',
                        'hide_empty' => false,
                        'parent' => 0
                    );
                    $cats = get_categories($args);
                    ob_start();
                    foreach ($cats as $cat) {
                        $cat_link = get_category_link($cat->term_id);
                        if (stripos( $_SERVER['REQUEST_URI'] , $cat->slug ) !== false) {
                            $is_active =  ' is-active';
                        }
                        else {
                            $is_active =  '';
                        }
                        echo '<li class="sub-itemMenu'.$is_active.'"><a href="'.$cat_link.'" title="'.$cat->name.'">'.$cat->name.'</a></li>';
                    }
                    $cat_list = ob_get_contents();
                    ob_end_clean();
                ?>
                <div class="subMenu" data-aos="fade-up">
                    <ul class="sub-listMenu">
                        <li class="sub-itemMenu <?php if(is_page('seminar')) echo 'is-active '; ?>all"><a href="<?php echo home_url(); ?>/seminar">すべて</a></li>
                        <?php echo $cat_list; ?>
                    </ul>
                </div>
            </div>
            <div class="all-seminar">
                <div class="list-columns flex tag" data-aos="fade-up">
                    <?php
                        $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                        $terms_id = get_queried_object()->term_id;
                        $args = array(
                            'post_type'=> 'seminar',                  /// Đây là tên của Post
                            'post_status' => 'publish',
                            'order'    => 'DESC',
                            'paged'  => $paged,
                            'posts_per_page' => "9",
                            'tax_query' => array(
                                array(
                                    'taxonomy' => 'seminar_tag',  /// Đây là tên của category trong phần Post thiết lập
                                    'field' => 'term_id',
                                    'terms' => $terms_id
                                )
                            )
                        );
                        $result = new WP_Query( $args );
                        if ( $result-> have_posts() ) : ?>
                        <?php while ( $result->have_posts() ) : $result->the_post() ; ?>
                        <?php
                            $post_id = $post->ID;
                            $post_link = get_the_permalink($post_id);
                            $post_title = get_the_title($post_id);

                            $seminar_date       = get_field( 'seminar_date' );
                            $seminar_start_date = date_create( $seminar_date['seminar_start_date'], wp_timezone() );
                            $seminar_close_date = date_create( $seminar_date['seminar_close_date'], wp_timezone() );
                            $seminar_day_locale = gms_get_day_locale( (int) $seminar_start_date->format( 'w' ) );

                            $seminar_date_apply = $seminar_start_date->format('Y年n月j日')
                                . '(' . $seminar_day_locale . ')';

                            $seminar_time_apply = $seminar_start_date->format('H:i')
                                . '〜' . $seminar_close_date->format('H:i');

                            if (has_post_thumbnail($post_id)) {
                                $post_thumbnail = get_the_post_thumbnail($post_id, 'middle', array( 'class' => 'sizes' ));
                            } else {
                                $post_thumbnail = '<img src="'.bloginfo('template_url').'/img/noimage.jpg" alt="" class="sizes">';
                            }
                        ?>
                        <div class="item-column">
                            <div class="col-content" data-aos="fade-up">
                                <a class="item-link" title="<?php echo $post_title; ?>" href="<?php echo $post_link; ?>">
                                    <div class="img-post">
                                        <?php echo $post_thumbnail; ?>
                                    </div>
                                </a>
                                <div class="info-item">
                                    <p class="title"><?php echo $post_title; ?></p>
                                    <div class="date-time flex">
                                        <p class="date"><?php echo $seminar_date_apply; ?></p>
                                        <p class="time"><?php echo $seminar_time_apply; ?></p>
                                    </div>

                                    <div class="list-tag-column flex">
                                        <?php
                                            $list_cats = get_the_terms($post->ID, 'seminar_tag' );
                                            ob_start();
                                            foreach ($list_cats as $cat) {
                                                $cat_link = get_category_link($cat->term_id);
                                                echo '<div class="item-tag-column"><a href="'.$cat_link.'" title="'.$cat->name.'">'.$cat->name.'</a></div>';
                                            }
                                            $cat_list = ob_get_contents();
                                            ob_end_clean();
                                            echo $cat_list;
                                        ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php endwhile; ?>
                    <?php endif;
                    wp_reset_postdata();
                    ?>
                </div>
                <?php
                    if ($result->max_num_pages > 1) {
                        wp_pagenavi();
                    }
                ?>
            </div>
        </div>
    </div>
</div>
<?php get_footer(); ?>