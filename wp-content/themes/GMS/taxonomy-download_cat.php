<?php
get_header();
global $post, $wp_query;
?>

    <div id="allDownload" class="columns-container">

        <div class="postBanner-top">
            <div class="inner">
                <div class="slider-post">
                    <ul class="post-list">
                        <?php
                        $args = array(
                            'post_type'      => 'download',
                            'post_status'    => 'publish',
                            'order'          => 'DESC',
                            'posts_per_page' => 5,
//                    'meta_query'     => array(
//                        array(
//                            'key'     => 'slider_banner',
//                            'value'   => 'Yes',
//                            'compare' => 'LIKE'
//                        )
//                    ),
                        );

                        $result = new WP_Query ( $args );
                        if ( $result-> have_posts() ) : ?>
                            <?php while ( $result->have_posts() ) : $result->the_post(); ?>
                                <li class="article-item">
                                    <a class="link-post" href="<?php the_permalink(); ?>">
                                        <div class="image-post">
                                            <?php
                                            $image = get_the_post_thumbnail_url();
                                            if($image):?>
                                                <img src="<?php echo get_the_post_thumbnail_url(); ?>">
                                            <?php else: ?>
                                                <img src="<?php bloginfo('template_url'); ?>/images/no_image_download.jpg">
                                            <?php endif; ?>
                                        </div>
                                        <div class="post-info">
                                            <div class="cate-date">
                                                <div class="category">
                                                    <?php
                                                    $country_lists = wp_get_post_terms($post->ID, 'download_cat', array("fields" => "all"));
                                                    foreach ($country_lists as $country_list) { ?>
                                                        <span href="<?php echo get_category_link($country_list->term_id); ?>"><?php echo $country_list->name; ?></span>
                                                    <?php } ?>
                                                </div>
                                                <p class="date"><?php echo get_the_date(); ?></p>
                                            </div>
                                            <h2 class="title-post"><?php echo get_the_title(); ?></h2>
                                            <div class="excerpt">
                                                <?php
                                                $content = get_the_content();
                                                echo wp_trim_words($content, 50, '...');
                                                ?>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                            <?php endwhile; ?>
                        <?php endif; ?>
                    </ul>
                </div>
            </div>
        </div>

        <div class="download-list" style="padding-top: 80px">
            <div class="inner">
                <div class="download-post is-active" id="download-all">
                    <ul class="article-list article-col-3">
                        <?php
                        $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                        $category = get_queried_object();

                        $args = array(
                            'post_type'      => 'download',
                            'post_status'    => 'publish',
                            'order'          => 'DESC',
                            'paged'          => $paged,
                            'posts_per_page' => 9,
                            'tax_query' => array(
                                array(
                                    'taxonomy' => 'download_cat',
                                    'field'    => 'slug',
                                    'terms'    => $category,
                                ),
                            ),
                        );

                        $result = new WP_Query ( $args );
                        if ( $result-> have_posts() ) : ?>
                            <?php while ( $result->have_posts() ) : $result->the_post(); ?>
                                <li class="article-item">
                                    <a class="link-post" href="<?php the_permalink(); ?>">
                                        <p class="image-post">
                                            <?php
                                            $image = get_the_post_thumbnail_url();
                                            if($image):?>
                                                <img src="<?php echo get_the_post_thumbnail_url(); ?>">
                                            <?php else: ?>
                                                <img src="<?php bloginfo('template_url'); ?>/images/no_image_download.jpg">
                                            <?php endif; ?>
                                        </p>
                                    </a>
                                    <div class="category">
                                        <?php
                                        $country_lists = wp_get_post_terms($post->ID, 'download_cat', array("fields" => "all"));
                                        foreach ($country_lists as $country_list) { ?>
                                            <a href="<?php echo get_category_link($country_list->term_id); ?>"><?php echo $country_list->name; ?></a>
                                        <?php } ?>
                                    </div>
                                    <h2 class="title-post">
                                        <a href="<?php the_permalink(); ?>">
                                            <?php echo get_the_title(); ?>
                                        </a>
                                    </h2>
                                    <div class="excerpt">
                                        <?php
                                        $content = get_the_content();
                                        echo wp_trim_words($content, 50, '...');
                                        ?>
                                    </div>
                                    <div class="link-page">
                                        <form method="POST" action="/confirm_download/?id=<?php echo get_the_ID(); ?>">
                                            <button class="download-link link-single">ダウンロードはこちら<span>＞</span></button>
                                        </form>
                                    </div>
                                </li>
                            <?php endwhile; ?>
                        <?php endif;
                        wp_reset_postdata();
                        ?>
                    </ul>
                    <?php if ($result->max_num_pages > 1): ?>
                        <?php echo wp_pagenavi(['query' => $result]); ?>
                    <?php endif; ?>
                </div>
            </div>
        </div>

        <?php get_template_part("template-parts/banner-other"); ?>

        <?php get_template_part("template-parts/support"); ?>

        <?php get_template_part("template-parts/line-up"); ?>

        <?php get_template_part("template-parts/contact-bottom"); ?>

    </div>

<?php get_footer(); ?>