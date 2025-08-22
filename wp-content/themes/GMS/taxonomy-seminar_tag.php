<?php
    get_header();
	global $post, $wp, $wp_query;
?>

<script>
    $(document).ready(function() {
        $('html, body').animate({
            scrollTop: $(".content-main").offset().top - 100
        }, 0);
    });
</script>

<div id="seminar-archive" class="columns-container">

    <div class="contact-header">
        <div class="inner">
            <div class="header-entry">
                <h2 class="heading-block center">
                    <span class="uppercase">SEMINAR INFORMATION</span>
                </h2>
                <p class="sub-ttl">外国人採用に関するセミナー情報</p>
            </div>
        </div>
        <?php
        $today = date('Y-m-d H:i');

        /*
        $terms = get_terms('seminar_featured');
        $seminar_featured_slug = array();

        foreach( $terms as $term ) {
            $seminar_featured_slug[] = $term->slug;
        }
        */

        $args = array(
            'post_type' => 'seminar',
            'post_status' => 'publish',
            'posts_per_page' => 4,
//                'meta_key' => 'seminar_close_date_apply',
//                'orderby' => 'meta_value',
            'order' => 'DESC',
            'cache_results' => true,
//                'update_post_meta_cache' => true,
//                'update_post_term_cache' => true,
            /*
            'tax_query' => array(
                array(
                    'taxonomy' => 'seminar_featured',
                    'field' => 'slug',
                    'terms' => $seminar_featured_slug,
                    'operator' => 'IN',
                ),
            ),
            */
//                'meta_query' => array(
//                    array(
//                        'key' => 'seminar_date_seminar_close_date',
//                        'value' => $today,
//                        'compare' => '>=',
//                        'type' => 'date',
//                    )
//                )
        );

        $posts = new WP_Query($args);
        $counts = $posts->post_count;
        ?>
        <div class="seminar-special <?php if($counts <= 1){echo "slick-no-action";} ?>">
            <ul class="list-columns flex">
                <?php if ($posts->have_posts()) : ?><?php while ($posts->have_posts()) : $posts->the_post(); ?>
                    <?php
                    $post_id = $post->ID;
                    $post_link = get_the_permalink($post_id);
                    $post_title = get_the_title($post_id);

                    $post_key = get_the_terms($post_id, 'seminar_featured')[0]->name;

                    $seminar_date = get_field('seminar_date');
                    $seminar_start_date = date_create($seminar_date['seminar_start_date'], wp_timezone());
                    $seminar_close_date = date_create($seminar_date['seminar_close_date'], wp_timezone());
                    $seminar_day_locale = gms_get_day_locale((int)$seminar_start_date->format('w'));

                    $seminar_date_apply = $seminar_start_date->format('Y年n月j日') . '(' . $seminar_day_locale . ')';

                    $seminar_time_apply = $seminar_start_date->format('H:i') . '〜' . $seminar_close_date->format('H:i');

                    if (has_post_thumbnail($post_id)) {
                        $post_thumbnail = get_the_post_thumbnail($post_id, 'post-thumbnail', array('class' => 'sizes'));
                    } else {
                        $post_thumbnail = '<img src="' . bloginfo('template_url') . '/img/noimage.jpg" alt="" class="sizes">';
                    }
                    $post_cats = get_the_terms($post_id, 'seminar_tag');
                    ob_start();
                    if ($post_cats) {
                        foreach ($post_cats as $cat) {
                            $cat_link = get_category_link($cat->term_id);
                            echo '<div class="item-tag-column"><a href="' . $cat_link . '" title="' . $cat->name . '">' . $cat->name . '</a></div>';
                        }
                        $cat_list = ob_get_contents();
                    }


                    $seminar_zoom = get_field('seminar_url');
                    $link_page_class = 'link-page disable';
                    $show_seminar_button = false;

                    if ($seminar_date = get_field('seminar_date')) {
                        date_default_timezone_set("Asia/Bangkok");
                        $seminar_start_date = $seminar_date['seminar_start_date'];
                        $seminar_close_date = $seminar_date['seminar_close_date'];

                        if (strtotime($seminar_close_date) > time()) {
                            $link_page_class = 'link-page';
                            if ($seminar_zoom) {
                                $show_seminar_button = true;
                            }
                        }
                    }

                    ob_end_clean();
                    ?>

                    <li class="item-column top">
                        <div class="col-content">
                            <div class="img-post">
                                <a href="<?php echo $post_link ?>">
                                    <?php echo $post_thumbnail ?>
                                </a>
                            </div>
                            <div class="info-item">
                                <div class="box-title flex">
                                    <span class="title-seminar"><?php echo $post_key ?></span>
                                </div>
                                <a class="item-link title" href="<?php echo $post_link ?>"
                                   title="<?php echo $post_title ?>">
                                    <?php echo $post_title ?>
                                </a>
                                <div class="description">

                                </div>
                                <div class="list-tag-column flex">
                                    <?php echo $cat_list ?>
                                </div>
                                <div class="date-time flex">
                                    <p class="date"><?php echo $seminar_date_apply ?></p>
                                    <p class="time"><?php echo $seminar_time_apply ?></p>
                                </div>
                                <?php if ($show_seminar_button): ?>
                                    <div class="link-page">
                                        <a href="<?php echo $post_link ?>">申込はこちら<span>＞</span></a>
                                    </div>
                                <?php else: ?>
                                    <div class="link-page">
                                        <a class="disable-url" href="">開催済<span>＞</span></a>
                                    </div>
                                <?php endif; ?>
                            </div>
                        </div>
                    </li>
                <?php endwhile; ?>
                <?php endif;
                ?>
            </ul>
        </div>

    </div>

    <?php
    if($counts > 1):?>
        <script>
            $('.seminar-special .list-columns').slick({
                dots: true,
                infinite: true,
                arrows: false,
                speed: 600,
                slidesToShow: 1,
                slidesToScroll: 1,
                autoplay: true,
                autoplaySpeed: 4000,
                adaptiveHeight: true,
                responsive: [
                    {
                        breakpoint: 768,
                        settings: {
                            adaptiveHeight: false,
                        }
                    }
                ]
            });
        </script>
    <?php endif;?>

    <div class="inner">

        <div class="content-main">
            <div class="seminar-main">
                <div class="all-seminar">
                <h4 class="seminar-main-title">開催済みのセミナーは資料ダウンロード可能です</h4>
                <div class="list-columns flex tag">
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
                                <div class="col-content">
                                    <a class="item-link" href="<?php echo $post_link; ?>">
                                        <div class="img-post">
                                            <?php echo $post_thumbnail; ?>
                                        </div>
                                    </a>
                                    <div class="info-item">
                                        <div class="date-time">
                                            <p class="date"><?php echo $seminar_date_apply ?></p>
                                            <p class="time"><?php echo $seminar_time_apply ?></p>
                                        </div>
                                        <a class="item-link" href="<?php echo $post_link; ?>">
                                            <p class="title"><?php echo $post_title ?></p>
                                        </a>
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
                <div class="sidebar-seminar">
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
                    <div class="subMenu">
                        <h4 class="sidebar-title">カテゴリーで探す</h4>
                        <ul class="sub-listMenu">
                            <li class="sub-itemMenu <?php if(is_page('seminar')) echo 'is-active '; ?>all"><a href="<?php echo home_url(); ?>/seminar">すべて</a></li>
                            <?php echo $cat_list; ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php get_template_part("template-parts/banner-other"); ?>

    <?php get_template_part("template-parts/support"); ?>

    <?php get_template_part("template-parts/line-up"); ?>

    <?php get_template_part("template-parts/contact-bottom"); ?>

</div>
<?php get_footer(); ?>