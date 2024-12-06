<?php
    get_header();
    global $post, $wp_query;
?>
<div id="allSeminar" class="columns-container">
    <div class="pageTitle" id="banner-qa">
        <div class="inner">
        <h2><span class="en">REFERENCE CASE Q&A</span>よくあるご質問や問題事例</h2>
        <div class="contents-block qa-search-block">
                <form id="qa-search" action="<?php bloginfo('url');?>/qa_detail">
                    <div class="search-box">
                             <?php 
								$country_lists = wp_get_post_terms($post->ID, 'qa-tag', array("fields" => "all"));
								foreach($country_lists as $country_list) { ?>
									 <?php $namekey= $country_list->name;?>
					    	<?php } ?>
                        <input class="search-txt" type="text" name="s" value="<?php echo $namekey; ?>" placeholder="フリー検索">
                        <label for="search-btn-qa"><i class="fa-regular fa-magnifying-glass"></i>
                            <input id="search-btn-qa" class="search-btn" type="submit">
                        </label>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div id="breadcrumb" class="breadcrumb">
        <ol>
            <li>
                <a href="<?php echo home_url(); ?>">トップページ</a>&nbsp;&nbsp;<i class="fa-solid fa-chevron-right"></i>
            </li>
            <li>
                <span>外国人材Q&A</span>
            </li>
        </ol>
    </div>
    <section id="qa-archive">
        <div class="inner">
            <div class="content-main">
                <div class="block-main">
					 <div class="containar-qa">
                       <div class="all-qa qa-tag">
                        <?php
                        function my_result_count() {
                            global $wp_query;
                            $paged = get_query_var( 'paged' ) - 1;
                            $ppp   = get_query_var( 'posts_per_page' );
                            $count = $total = $wp_query->post_count;
                            $from  = 0;
                            if ( 0 < $ppp ) {
                                $total = $wp_query->found_posts;
                                if ( 0 < $paged )
                                    $from  = $paged * $ppp;
                            }
                            printf(
                                '<span class="result-count-txt">全<span>%1$s</span>件<span>%2$s%3$s</span>件を表示中</span>',
                                $total,
                                ( 1 < $count ? ($from + 1 . '〜') : '' ),
                                ($from + $count )
                            );
                        }

                        $obj = get_queried_object();

                        $tax_query[] = array(
                            'taxonomy' => 'qa-tag',
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

                        echo '<h3 class="title-tag"><span class="icon-3">'.esc_html($obj->name).' に関するQ＆A一覧</span></h3>';
                        my_result_count();
                        ?>
                        <ul class="list-faq">
                            <?php if ( $result->have_posts() ) : while ( $result->have_posts() ) : $result->the_post();
                                $qa_id = $post->ID;
                                $qa_link = get_the_permalink($qa_id);
                                $qa_title = get_the_title($qa_id);
                                $qa_answer_ttl = get_field('qa-answer-ttl', $qa_id);
                                $qa_answer_txt = get_field('qa-answer-txt', $qa_id);
                                ?>
                            <li class="item-faq">
                                <a href="<?= esc_html(  $qa_link ); ?>" title="<?= esc_html($qa_title ); ?>">
                                    <h4 class="faq-title">
                                        <?= esc_html( $qa_title ); ?>
                                    </h4>
                                </a>
                            </li>
                            <?php endwhile; endif;
                            wp_reset_postdata();
                            ?>
                        </ul>
                        <?php
                         if (function_exists('wp_pagenavi')) {                    
                            wp_pagenavi( array( 'query' => $result ) );
                        }
                        ?>
                    </div>
			         <div class="ranking-box">
                            <?php get_template_part('template-parts/ranking_qa'); ?>
                     </div>
                </div>
                    <?php get_template_part('template-parts/qa-sidebar'); ?>
                </div>
                <div class="page-top">
                    <a href="#" class="page-top-anchor">
                        <picture>
                            <img src="<?php bloginfo('template_url');?>/images/common/page-top-anchor.png" alt="">
                        </picture>
                    </a>
                </div>
            </div>
        </div>
    </section>
</div>
<?php get_footer(); ?>