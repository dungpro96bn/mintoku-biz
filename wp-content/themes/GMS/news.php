<?php
    /**
     * Template Name: news
     * Template Post Type: page
    **/
    get_header();
	global $post, $wp_query;
?>
<style>
  
/*----------news-------------*/ 
.flex {
    display: flex
;
    flex-wrap: wrap;
    justify-content: space-between;
}
#news {
    background: white;
    padding: 70px 0px 0px;
}

#news .content-news .box-title-news {
    width: 240px;
}
#news .content-news .new-content {
    width: calc(100% - 240px);
}
#news .content-news .item-news .date-cat {
    width: 250px;
    color: #2A4852;
}

#news .content-news .item-news .date-cat  .cat {
    width: 130px;
    color: white;
    text-align: center;
    font-size: 14px;
    font-weight: 500;
    background: #0B54F7;
    border-radius: 20px;
    height: 38px;
    line-height: 38px;
}
#news .content-news .item-news .date-cat  .time {
    width: calc(100% - 130px);
    font-size: 17px;
    font-weight: 500;
    padding-left: 15px;
    padding-top: 10px;
    line-height: 1.5;
}
#allNews #news .content-news .tab_box{
	width: 100%;
    max-width: 1024px;
}
#allNews #news .content-news .new-content{
	width: 100%;
}
#news .content-news .item-news .text-content {
    font-size: 16px;
    line-height: 1.5;
    color: #2A4852;
    font-weight: 600;
    width: calc(100% - 250px);
    padding-left: 10px;
    padding-top: 10px;
} 
#news .content-news .item-news a {
    justify-content: start;
    margin-bottom: 20px;
}

#homepage #news .box-link-page {
    justify-content: start;
}
#homepage #news .title-home{
    text-align: left;
}

@media(max-width: 767px){
/*----------#news------------*/
    #news {
        padding: 70px 0px 0px;
    }
    #news .content-news .box-title-news {
        width: 100%;
    }
    #news .content-news .new-content {
        width: 100%;
        margin-bottom: 30px;
    }
    #homepage #news .title-home {
        text-align: center;
    }
    #news .content-news .item-news .text-content {
        width: 100%;
        padding-left: 0px;
        line-height: 28px;
    }
    #news .content-news .item-news .date-cat {
        align-items: center;
        width: 100%;
        column-gap: 10px;
    }
    #news .content-news .item-news .date-cat .time {
        padding-top: 0px;
    }
    #homepage #news .box-link-page {
        justify-content: center;
        display: flex;
    }
}

</style>
<div id="allNews" class="columns-container">

    <div class="banner-page">
        <div class="banner-main">
            <div class="inner">
                <div class="heading-banner">
                    <h1>お知らせ一覧</h1>
                </div>
            </div>
        </div>
    </div>

    <section id="news">
        <div class="inner">
            <div class="content-news flex">
                <div class="tab_box">
                	<div class="btn_area">
                         <p class="tab_btn active">お知らせ</p>
                         <p class="tab_btn">セミナー</p>
                     </div>
                    <div class="panel_area">
                        <div class="tab_panel active">
                            <ul class="new-content">
                                <?php
                                $args = array(
                                    'post_type' => 'post',
                                    'post_status' => 'publish',
                                    'posts_per_page' => -1,
                                    'category_name' => 'news'
                                );

                                $the_query = new WP_Query($args);

                                while ( $the_query->have_posts() ) : $the_query->the_post();
                                    $post_id = $post->ID;
                                    $post_link = get_the_permalink($post_id);
                                    $post_date = get_the_time('Y.m.d',$post_id);
                                    $post_title = get_the_title($post_id);
                                    $post_cats = get_the_terms($post_id, 'category' );
                                    ob_start();
                                    foreach ($post_cats as $cat) {
                                        $cat_link = get_tag_link($cat->term_id);
                                        echo '<li class="cat-item '.$cat->slug.'">'.$cat->name.'</li>';
                                    }
                                    $cat_list = ob_get_contents();
                                    ob_end_clean();

                                    ?>
                                    <li class="item-news">
                                        <a href="<?= esc_url( $post_link ); ?>" title="<?= esc_html( $post_title ); ?>" class="flex">
                                            <div class="date-cat flex">
                                               <p class="time montserrat"><?= esc_html( $post_date ); ?></p>
                                                <ul class="cat"><?= $cat_list; ?></ul>
                                            </div>
                                            <p class="text-content"><?= esc_html( $post_title ); ?></p>
                                        </a>
                                    </li>
                                    <?php
                                wp_reset_postdata();
                                endwhile;
                                ?>
                            </ul>
                        </div>
                        <div class="tab_panel">
                            <ul class="new-content">
                                <?php
                                $args = array(
                                    'post_type' => 'post',
                                    'post_status' => 'publish',
                                    'posts_per_page' => -1,
                                    'category_name' => 'seminar'
                                );
                                $the_query = new WP_Query($args);

                                while ( $the_query->have_posts() ) : $the_query->the_post();
                                    $post_id = $post->ID;
                                    $post_link = get_the_permalink($post_id);
                                    $post_date = get_the_time('Y.m.d',$post_id);
                                    $post_title = get_the_title($post_id);
                                    $post_cats = get_the_terms($post_id, 'category' );
                                    ob_start();
                                    foreach ($post_cats as $cat) {
                                        $cat_link = get_tag_link($cat->term_id);
                                        echo '<li class="cat-item '.$cat->slug.'">'.$cat->name.'</li>';
                                    }
                                    $cat_list = ob_get_contents();
                                    ob_end_clean();

                                    ?>
                                    <li class="item-news" data-aos="fade-up">
                                        <a href="<?= esc_url( $post_link ); ?>" title="<?= esc_html( $post_title ); ?>" class="flex">
                                            <div class="date-cat flex">
                                               <p class="time montserrat"><?= esc_html( $post_date ); ?></p>
                                                <ul class="cat"><?= $cat_list; ?></ul>
                                               
                                            </div>
                                            <p class="text-content"><?= esc_html( $post_title ); ?></p>
                                        </a>
                                    </li>
                                    <?php
                                wp_reset_postdata();
                                endwhile;
                                ?>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<?php get_footer(); ?>