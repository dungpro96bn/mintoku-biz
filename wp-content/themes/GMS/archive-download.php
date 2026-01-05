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

    <script>
        $('.post-list').slick({
            infinite: true,
            arrows: false,
            dots: true,
            slidesToShow: 1,
            slidesToScroll: 1,
            speed: 500,
            autoplay: true,
            autoplaySpeed: 4000,
        });
    </script>

    <div class="download-tabs">
        <div class="inner">
            <form id="filter-form" method="GET" action="<?php echo home_url(); ?>/report_download/">
                <div class="tabs-list">
                    <label class="tab-action <?php echo (isset($_GET['category']) && $_GET['category'] == 'all' || !$_GET['category']) ? 'is-active' : ''; ?>" >
                        <input type="radio" name="category" value="all" <?php echo (!isset($_GET['category']) || $_GET['category'] == 'all') ? 'checked' : ''; ?>> ALL
                    </label>
                    <label class="tab-action <?php echo (isset($_GET['category']) && $_GET['category'] == 'white_paper') ? 'is-active' : ''; ?>" >
                        <input type="radio" name="category" value="white_paper" <?php echo (isset($_GET['category']) && $_GET['category'] == 'white_paper') ? 'checked' : ''; ?>> お役⽴ち資料
                    </label>
                    <label class="tab-action <?php echo (isset($_GET['category']) && $_GET['category'] == 'report') ? 'is-active' : ''; ?>" >
                        <input type="radio" name="category" value="report" <?php echo (isset($_GET['category']) && $_GET['category'] == 'report') ? 'checked' : ''; ?>> 調査レポート
                    </label>
                    <label class="tab-action <?php echo (isset($_GET['category']) && $_GET['category'] == 'manual_video') ? 'is-active' : ''; ?>" >
                        <input type="radio" name="category" value="manual_video" <?php echo (isset($_GET['category']) && $_GET['category'] == 'manual_video') ? 'checked' : ''; ?>> マニュアル動画
                    </label>
                </div>
            </form>
        </div>
    </div>

    <div class="download-list">
        <div class="inner">
            <div class="download-post is-active" id="download-all">
                <?php
                $category = isset($_GET['category']) ? sanitize_text_field($_GET['category']) : 'all';

                if ($category == 'manual_video'):
                    $args = [
                        'post_type'      => 'manual_video',
                        'post_status'    => 'publish',
                        'posts_per_page' => -1,
                        'order'          => 'DESC',
                    ];
                    $posts = new WP_Query($args);
                    ?>
                    <ul class="article-list article-col-3">
                        <?php while ($posts->have_posts()) : $posts->the_post();
                            $video_link  = get_field('link-video');
                            $img_video   = get_field('_img-video');
                            $file_video  = get_field('video_camcat_pdf');
                        ?>
                            <li class="article-item article-item-video">
                                <div class="img-video">
                                    <picture class="box-img">
                                        <source srcset="<?= esc_url($img_video); ?>">
                                        <img class="sizes" src="<?= esc_url($img_video); ?>" alt="">
                                    </picture>
                                </div>
                                <p class="title-video"><?= get_the_title(); ?></p>
                                <div class="modal01">
                                    <div class="modal-content">
                                        <span class="close">&times;</span>
                                        <div id="video-container"><?= $video_link; ?></div>
                                    </div>
                                </div>
                                <a href="<?= esc_url($file_video['url']); ?>" class="link-page camlink" target="_blank">ダウンロードはこちら<span>＞</span></a>
                            </li>
                        <?php endwhile; wp_reset_postdata(); ?>
                    </ul>
                <?php else:
                    $paged = get_query_var('paged') ?: 1;
                    $args = [
                        'post_type'      => 'download',
                        'post_status'    => 'publish',
                        'order'          => 'DESC',
                        'paged'          => $paged,
                        'posts_per_page' => 9,
                    ];

                    if ($category !== 'all') {
                        $args['tax_query'] = [[
                            'taxonomy' => 'download_cat',
                            'field'    => 'slug',
                            'terms'    => $category,
                        ]];
                    }

                    $result = new WP_Query($args);
                    ?>
                    <ul class="article-list article-col-3">
                        <?php while ($result->have_posts()) : $result->the_post();
                            $image = get_the_post_thumbnail_url() ?: get_template_directory_uri() . '/images/no_image_download.jpg';
                            $categories = wp_get_post_terms(get_the_ID(), 'download_cat');
                        ?>
                            <li class="article-item">
                                <a class="link-post" href="<?= get_permalink(); ?>">
                                    <p class="image-post">
                                        <img src="<?= esc_url($image); ?>">
                                    </p>
                                </a>
                                <div class="category">
                                    <?php foreach ($categories as $cat): ?>
                                        <a href="<?= get_category_link($cat->term_id); ?>"><?= esc_html($cat->name); ?></a>
                                    <?php endforeach; ?>
                                </div>
                                <h2 class="title-post">
                                    <a href="<?= get_permalink(); ?>"><?= get_the_title(); ?></a>
                                </h2>
                                <div class="excerpt"><?= wp_trim_words(get_the_content(), 50, '...'); ?></div>
                                <div class="link-page">
                                    <form method="POST" action="<?php echo home_url(); ?>/confirm_download/?id=<?= get_the_ID(); ?>">
                                        <button class="download-link link-single">ダウンロードはこちら<span>＞</span></button>
                                    </form>
                                </div>
                            </li>
                        <?php endwhile; ?>
                    </ul>

                    <?php if ($result->max_num_pages > 1) {
                        echo wp_pagenavi(['query' => $result]);
                    }
                    wp_reset_postdata();
                endif; ?>
            </div>

        </div>
    </div>

    <?php get_template_part("template-parts/banner-other"); ?>

    <?php get_template_part("template-parts/support"); ?>

    <?php get_template_part("template-parts/line-up"); ?>

    <?php get_template_part("template-parts/contact-bottom"); ?>

</div>

<?php get_footer(); ?>