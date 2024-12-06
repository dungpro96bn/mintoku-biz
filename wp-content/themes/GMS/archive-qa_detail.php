<?php
    /**
     * Template Name: qa
     * Template Post Type: page
    **/
    get_header(); 
	global $post, $wp_query;
?>


<style>

#bock-sevice .box-contact .list-img .item-img {
		width:calc(50%) !important;
}

#allSeminar .box-contact .left-contact	{
	width:70% !important;
}
	
#allSeminar .box-contact .right-contact	{
	width:30% !important;
}	
	
	
@media (max-width: 768px) {
	#allSeminar .box-contact .left-contact	{
	  width:100% !important;
	}

	#allSeminar .box-contact .right-contact	{
		width:100% !important;
	}	
	#bock-sevice .box-contact .list-img .item-img {
			width:calc(50%) !important;
	}	
		
}

</style>


<div id="allSeminar" class="columns-container">
    <div class="pageTitle">
        <h2><span class="en">REFERENCE CASE Q&A</span>よくあるご質問や問題事例</h2>
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
                    <h3 class="title-seminar">カテゴリーで探す</h3>
                    <div class="contents-block qa-search-block">
                        <form id="qa-search" action="<?php bloginfo('url');?>/qa_detail">
                            <div class="search-box">
                                <?php
                                    $keyword = '';
                                    if(isset($_GET) && $_GET['s']) :
                                        $keyword = $_GET['s'];
                                    endif;
                                ?>
                                <input class="search-txt" type="text" name="s" value="<?php echo $keyword; ?>"
                                    placeholder="フリー検索">
                                <label for="search-btn-qa"><i class="fa-regular fa-magnifying-glass"></i>
                                    <input id="search-btn-qa" class="search-btn" type="submit">
                                </label>

                            </div>
                        </form>
                    </div>
					
					 <h3 class="title-seminar">カテゴリーで探す</h3>
                    <?php get_template_part('template-parts/qa-sidebar'); ?>
					
                 <div class="containar-qa">
					 
                    <div class="all-qa">
                        <h3 class="title-seminar">人気のQ＆A</h3>
                        <?php
                            if($_GET['s']) {
                                $s = $_GET['s'];

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

                                echo '<h3 class="ttl ryo qa-ttl"><span class="icon-3">'.esc_html($s).' に関するQ＆A一覧</span></h3>';
                                my_result_count();
                            }
                            else {
                                $s = '';
                            }

                            $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                            $args = array(
                                'post_type'=> 'qa_detail',
                                'post_status' => 'publish',
								 'orderby' => 'post_views',
                                'order'    => 'DESC',
                                'paged'  => $paged,
                                'posts_per_page' => "10",
                                's' => $s,                                
                            );
                            $result = new WP_Query( $args );
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
					 <!-- Raking----------------------->
                      
                     <div class="ranking-box">
                          
                            <?php get_template_part('template-parts/ranking_qa'); ?>
                      </div>

                 </div>
             
					
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
		
		
		
				<!--------END  interdepend_qa --------------->

					<div class="box_qa_list">
						<?php get_template_part('block-service/block-qa'); ?>
					</div>

        <div id="bock-sevice">
            <div class="contact-page">
                <div class="inner">
                    <h3 class="title-home" data-aos="fade-up">
                        <span class="text-es montserrat">CONTACT</span><br>
                        <span class="text-jp">サービスに関する<br class="sp-br">お問い合わせ・ご相談</span><br>
                        <span class="text-des">お気軽にご連絡ください。</span>
                    </h3>
                    <div class="box-contact" data-aos="fade-up">
                        <a href="<?php bloginfo('url');?>/#contact" class="a-box flex">
                            <div class="left-contact">
                                <p class="text-01">その疑問、私たちにお任せください。<br class="pc-br">社労士・行政書士が無料でお答えします。</p>
                                <p class="link-contact destop" target="_blank">契約やトラブル相談、お気軽にご連絡ください。</p>
                                <p class="link-contact mobi" target="_blank">契約やトラブル相談はこちら</p>
                                <div class="phone flex">
                                    <div class="phone-left">
                                        <div class="top">
                                            <picture class="box-img">
                                                <source
                                                    srcset="<?php bloginfo('template_url');?>/images/top_icon_contact.png">
                                                <img class="sizes"
                                                    src="<?php bloginfo('template_url');?>/images/top_icon_contact.png"
                                                    alt="">
                                            </picture>
                                            <span class="text-phone">お問合せ</span>
                                        </div>
                                        <p class="time">営業時間:10時〜18時（月〜金）</p>
                                    </div>
                                    <p class="number-phone montserrat">03-6738-9686</p>
                                </div>
                            </div>
                            <div class="right-contact">
                               <ul class="list-img flex">
									<li class="item-img">
										<picture class="box-img">
											<source srcset="<?php bloginfo('template_url');?>/images/top_case_people_01.png">
											 <img class="sizes" src="<?php bloginfo('template_url');?>/images/top_case_people_01.png" alt="">
										</picture>
									</li>
<!-- 									<li class="item-img">
										<picture class="box-img">
											<source srcset="<?php bloginfo('template_url');?>/images/top_case_people_02.png">
											 <img class="sizes" src="<?php bloginfo('template_url');?>/images/top_case_people_02.png" alt="">
										</picture>
									</li> -->
<!-- 									<li class="item-img">
										<picture class="box-img">
											<source srcset="<?php bloginfo('template_url');?>/images/top_case_people_04.png">
											 <img class="sizes" src="<?php bloginfo('template_url');?>/images/top_case_people_04.png" alt="">
										</picture>
									</li> -->
									<li class="item-img">
										<picture class="box-img">
											<source srcset="<?php bloginfo('template_url');?>/images/top_case_people_03.png">
											 <img class="sizes" src="<?php bloginfo('template_url');?>/images/top_case_people_03.png" alt="">
										</picture>
									</li>
									<li class="item-img">
										<picture class="box-img">
											<source srcset="<?php bloginfo('template_url');?>/images/top_case_people_05.png">
											 <img class="sizes" src="<?php bloginfo('template_url');?>/images/top_case_people_05.png" alt="">
										</picture>
									</li>
									<li class="item-img">
										<picture class="box-img">
											<source srcset="<?php bloginfo('template_url');?>/images/top_case_people_06.png">
											 <img class="sizes" src="<?php bloginfo('template_url');?>/images/top_case_people_06.png" alt="">
										</picture>
									</li>
								</ul>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<?php get_footer(); ?>