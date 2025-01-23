<?php
    get_header();
    global $post, $wp_query;
?>
    <div class="qa-page">

        <div class="banner-page">
            <div class="banner-main">
                <div class="inner">
                    <div class="heading-banner">
                        <h1>外国人材Q&A</h1>
                    </div>
                </div>
            </div>
        </div>

        <div id="qa-archive">
            <div class="inner">
                <div class="content-main">
                    <div class="block-main">
                        <div class="header-entry">
                            <h2 class="heading-block center">
                                <span class="uppercase">REFERENCE CASE Q&A</span>
                            </h2>
                            <p class="sub-ttl">よくあるご質問や問題事例</p>
                        </div>
                        <div class="qa-tabs">
                            <h2 class="title">カテゴリーで探す</h2>
                            <?php get_template_part('template-parts/qa-sidebar'); ?>
                        </div>

                    </div>
                </div>
            </div>

            <div class="container-qa">
                <div class="all-qa">
                    <h3 class="title-seminar">人気のQ＆A</h3>
                    <?php
                    $obj = get_queried_object();
                    $tax_query[] = array(
                        'taxonomy' => 'qa_list',
                        'post_status' => 'publish',
                        'terms' => $obj->slug,
                        'field' => 'slug',
                    );
                    $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                    $args = array(
                        'post_type'=> 'qa_detail',
                        'post_status' => 'publish',
                        'order'    => 'DESC',
                        'paged'  => $paged,
                        'posts_per_page' => "10",
                        'tax_query' => $tax_query
                    );

                    $result = new WP_Query( $args );
                    ?>
                    <ul class="list-faq">
                        <?php if ($result->have_posts()) : while ($result->have_posts()) : $result->the_post();
                            $qa_id = $post->ID;
                            $qa_link = get_the_permalink($qa_id);
                            $qa_title = get_the_title($qa_id);
                            $qa_answer_ttl = get_field('qa-answer-ttl', $qa_id);
                            $qa_answer_txt = get_field('qa-answer-txt', $qa_id);

                            ?>
                            <li class="item-faq">
                                <a href="<?= esc_html($qa_link); ?>" title="<?= esc_html($qa_title); ?>">
                                    <?= esc_html($qa_title); ?>
                                </a>
                            </li>
                        <?php endwhile; endif;
                        wp_reset_postdata();
                        ?>
                    </ul>
                    <?php if ($result->max_num_pages > 1): ?>
                        <?php wp_pagenavi(array('query' => $result)); ?>
                    <?php endif; ?>
                </div>
                <div class="ranking-box">
                    <?php get_template_part('template-parts/ranking_qa'); ?>
                </div>
            </div>
        </div>

        <?php get_template_part("template-parts/banner-other"); ?>

        <?php get_template_part("template-parts/support"); ?>

        <?php get_template_part("template-parts/line-up"); ?>

        <?php get_template_part("template-parts/contact-bottom"); ?>

    </div>

<?php get_footer(); ?>