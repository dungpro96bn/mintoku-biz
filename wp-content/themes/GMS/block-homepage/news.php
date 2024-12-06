<section id="news">
    <div class="inner">
        <div class="content-news flex">
            <div class="box-title-news">
                <h3 class="title-home">
                    <span class="text-es montserrat">NEWS</span>
                    <span class="text-jp">お知らせ</span>
                </h3>
                <div class="box-link-page flex js-fadein">
                <a href="<?php bloginfo('url');?>/news" class="link-page destop new">お知らせ一覧</a>
            </div>
            </div>
            <ul class="new-content">
                <?php
                    $args = array(
                        'post_type' => 'post',
                        'posts_per_page' => 5,
                    );

                    $the_query = new WP_Query($args);

                    while ( $the_query->have_posts() ) : $the_query->the_post();
                        $post_id = $post->ID;
                        $post_title = get_the_title();
                        $post_link = get_the_permalink();
                        $post_date = get_the_time('Y.m.d');

                        $post_cats = get_the_terms($post_id, 'category' );
                        ob_start();
                        foreach ($post_cats as $cat) {
                            $cat_link = get_tag_link($cat->term_id);
                            echo '<li class="cat-item">'.$cat->name.'</li>';
                        }
                        $cat_list = ob_get_contents();
                        ob_end_clean();
                        ?>
                            <li class="item-news js-fadein">
                                <a href="<?= esc_url( $post_link ); ?>" title="<?= esc_html( $post_title ); ?>" class="flex">
                                    <div class="date-cat flex">
                                        <ul class="cat"><?= $cat_list; ?></ul>
                                        <p class="time montserrat"><?= esc_html( $post_date ); ?></p>
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
        <div class="box-link-page flex">
            <a href="" class="link-page mobi">お知らせ一覧</a>
        </div>
        <div class="page-top">
                <a href="#" class="page-top-anchor">
                    <picture>
                        <img src="<?php bloginfo('template_url');?>/images/common/page-top-anchor.png" alt="">
                    </picture>
                </a>
           </div>
    </div>
</section>