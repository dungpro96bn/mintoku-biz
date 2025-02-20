<?php
    /**
     * Template Name: news
     * Template Post Type: page
    **/
    get_header();
	global $post, $wp_query;
?>
<style>
  
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
        <div id="breadcrumb-footer" class="breadcrumb">
            <ol>
                <li>
                    <a href="<?php echo home_url(); ?>">トップページ</a>&nbsp;&nbsp;<i class="fa-solid fa-chevron-right"></i>
                </li>
                <li>
                    <span>お知らせ一覧</span>
                </li>
            </ol>
       </div>
    </section>
</div>
<?php get_footer(); ?>