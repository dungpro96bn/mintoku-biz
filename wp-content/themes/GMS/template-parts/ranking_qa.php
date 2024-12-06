 <ul class="raking-item">
    <h3 class="title-qa">Q&Aランキング</h3>
        <?php 
            $term = get_term_by( 'slug', get_query_var( 'term' ), get_query_var( 'taxonomy' ) );
            $args = array(       
                'taxonomy' => 'rankinqa',
                'hide_empty' => false,
                'parent' => 0,
				'posts_per_page' => "5",  
            );
            $cats = get_categories($args);
            $count03;
        ?>
        <?php foreach ( $cats as $cat ) : 
            $nameRanking = $cat->name;
            $nameRankingchoice = substr($nameRanking ,3);
            $idRanking = $cat->slug;
        ?>
            <li class="item-rank flex">
                    <span class ="number-rank"><?php echo '0'.($count03 = $count03 + 1) ?></span>
                    <a class="item-link" href="<?php bloginfo('url');?>/qa_detail/<?= esc_html($idRanking); ?>" ><?= esc_html($nameRankingchoice ); ?></a>
            </li>
        <?php endforeach; ?>
 </ul>

 <ul class="raking-item">
    <h3 class="title-qa">新着Q＆A</h3>
    <?php
        $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
        $args = array(
            'post_type'=> 'qa_detail',
            'post_status' => 'publish',
            'order'    => 'DESC',
            'orderby' => 'date',                    
            'paged'  => $paged,
            'posts_per_page' => "5",                               
        );
        $result = new WP_Query( $args );
    ?>
    
    <?php if ( $result->have_posts() ) : while ( $result->have_posts() ) : $result->the_post();
            $qa_id = $post->ID;
            $qa_link = get_the_permalink($qa_id);
            $qa_title = get_the_title($qa_id);
            $count02;
        ?>
            <li class="item-rank flex">
                    <span class ="number-rank"><?php echo '0'.($count02 = $count02 + 1) ?></span>
                    <a class="item-link" href="<?= esc_html( $qa_link ); ?>" title="<?= esc_html(  $qa_title  ); ?>"><?= esc_html(  $qa_title  ); ?></a>
            </li>
    <?php endwhile; endif; ?>                           
</ul>


