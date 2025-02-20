<?php
    get_header();
	global $post, $wp_query;
?>

<style>
#allDownload .dowload-single {
    padding: 100px 0px 150px
}

#allDownload .content-single .box-img {
    width: 100%;
    max-width: 600px;
    margin: 0 auto 30px;
}

#allDownload .content-single .box-img img {
    width: 100% !important;
}

#allDownload .content-single .content-left {
    width: 100%;
}

#allDownload .content-single {
    margin-bottom: 80px;
}

#allDownload .content-single .type {
    padding: 12px 20px;
    background: #E48121;
    display: inline-block;
    border-radius: 30px;
    color: white;
    margin-bottom: 20px;
    font-size: 18px;
    line-height: 1;
}

#allDownload .content-single .dt-title {
    font-size: 26px;
    font-weight: 600;
    margin-bottom: 20px;
}

#allDownload .content-single .dd-content {
    font-size: 20px;
    line-height: 30px;
    font-weight: 400;
}

#allDownload .link-single {
    display: block;
    padding: 10px 0px;
    text-align: center;
    font-size: 20px;
    border-radius: 30px;
    position: relative;
}

#allDownload .box-link {
    width: 100%;
    margin: auto;
    display: grid;
    grid-template-columns: repeat(2,1fr);
    column-gap: 40px;
    max-width: 680px;
}

#allDownload .link-single.back {
    border: 1px solid #0B54F7;
    color: #0B54F7;
}

#allDownload .link-single.download-link {
    background: #FF8D00;
    color: white;
}
/* #allDownload .link-single.download-link:after {
    content: "";
    position: absolute;
    background-image: url(../../images/complete_icon.png);
    width: 29px;
    height: 23px;
    top: 13px;
    right: 40px;
} */


@media (max-width: 768px) {
    #allDownload .dowload-single {
        padding: 50px 0px;
    }

    #allDownload .content-single .type {
        padding: 8px 20px;
        margin-bottom: 10px;
        font-size: 14px;
    }

    #allDownload .content-single .box-img {
        width: 100%;
        order: 2;
    }

    #allDownload .content-single .content-left {
        width: 100%;
        padding-left: 0px;
        order: 1;
    }

    #allDownload .content-single .dt-title {
        font-size: 18px;
    }

    #allDownload .dl-text {
        margin-bottom: 20px;
    }
    #allDownload .box-link{
        grid-template-columns: repeat(1,1fr);
        row-gap: 15px;
        max-width: 300px;
        margin: auto;
    }
    #allDownload .link-single {
        width: 100%;
        padding: 5px 0px;
        font-size: 16px;
        border-radius: 30px;
        margin: auto;
        height: 50px;
    }

    #allDownload .content-single {
        margin-bottom: 30px;
    }
    #allDownload .content-single .dd-content {
        font-size: 16px;
        line-height: 26px;
    }
}
</style>
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

    <?php 
        $post_link = get_the_permalink();
        $post_title = get_the_title();
        $post_content = get_the_content();
        if (has_post_thumbnail()) {
            $post_thumbnail = get_the_post_thumbnail(get_the_ID(), 'post-thumbnail', array( 'class' => 'sizes' ));
        } else {
            $post_thumbnail = '<img src="'.bloginfo('template_url').'/images/no_image.jpg" alt="" class="sizes">';
        }
        $post_file = get_field('file', get_the_ID());
        $terms = wp_get_post_terms( get_the_ID(), 'download_cat' );       
    ?>
    <section class="dowload-single">
        <div class="inner">
            <div class="content-single flex">
                <div class="box-img">
                    <picture class="box-img">
                        <?php echo $post_thumbnail; ?>
                    </picture>
                </div>
                <div class="content-left">
                    <?php foreach ( $terms as $term ) : ?>
                        <p class="type"><?php echo $term->name; ?></p>
                    <?php endforeach; ?>
                    
                    <dl class="dl-text">
                        <dt class="dt-title"><?php echo $post_title; ?></dt>
                        <dd class="dd-content"><?php echo $post_content; ?></dd>                        
                    </dl>
                </div>
            </div>
            <div class="box-link flex">
                <a href="<?php echo home_url('/report_download') ?>" title="戻る" class="back link-single">戻る</a>                
                <button class="download-link link-single">資料をダウンロードする</button>
            </div>
        </div>
    </section>
</div>
<?php get_footer(); ?>