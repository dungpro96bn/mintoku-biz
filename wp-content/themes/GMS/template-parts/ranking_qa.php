<div class="raking-main">
    <h3 class="title-qa">新着Q＆A</h3>
    <ul class="raking-list">
        <?php
        $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
        $args = array(
            'post_type' => 'qa_detail',
            'post_status' => 'publish',
            'order' => 'DESC',
            'orderby' => 'date',
            'paged' => $paged,
            'posts_per_page' => "5",
        );
        $result = new WP_Query($args);
        ?>

        <?php if ($result->have_posts()) : while ($result->have_posts()) : $result->the_post();
            $qa_id = $post->ID;
            $qa_link = get_the_permalink($qa_id);
            $qa_title = get_the_title($qa_id);
            $count02;
            ?>
            <li class="item-rank flex">
                <span class="number-rank"><?php echo '0' . ($count02 = $count02 + 1) ?></span>
                <a class="item-link" href="<?= esc_html($qa_link); ?>"
                   title="<?= esc_html($qa_title); ?>"><?= esc_html($qa_title); ?></a>
            </li>
        <?php endwhile; endif; ?>
    </ul>
</div>