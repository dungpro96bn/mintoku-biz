<?php    
get_header();
global $post, $wp_query;
?>

<?php 
$qa_id = $post->ID;
$qa_link = get_the_permalink($qa_id);
$qa_title = get_the_title($qa_id);
$qa_answer_ttl = get_field('qa-answer-ttl', $qa_id);
$qa_answer_txt = get_field('qa-answer-txt', $qa_id);

$qa_date = get_the_date('Y年n月j日');
$qa_relate = get_field('qa-relate', $qa_id);
$terms = get_the_terms( $post->ID , 'qa_list', 'string');                           
$term_ids = wp_list_pluck($terms,'term_id');
$term_name = wp_list_pluck($terms,'name');    
$CheckService = get_field('checkservice'); 
$interdepend_video = get_field('interdepend-video', $qa_id); 
$interdepend_seminar = get_field('interdepend_seminar', $qa_id); 
?>
<style>
	#qa-archive #allService {
		padding: 10px 0px 10px;
		background-image: none;
		width: 100%;
	}   
	#qa-archive .box-link-page{
		justify-content: center;
	}
	#qa-archive .block-main .all-qa.single {
		width: 100%!important;
	} 


	#block-table-qa {
		position: relative;
		max-width: 960px;
		margin:auto;
		margin-top:50px
	}
	#block-table-qa .note-style {
		position: absolute;
		left: 20px;
		bottom: 0px;
	}

	#block-table-qa .list-style {

	}
	#block-table-qa .list-style .item-style {
		display: flex;
	}
	#block-table-qa .list-style .item-style .title-style{
		width: 35%;
		border-top: none;
	}
	#block-table-qa .list-style .item-style .text-style {
		width: 65%;
		border-left: 1px solid #fff;
	}

	#block-table-qa br {
		display:none
	}
	#block-table-qa .br-single {
		display:block !important
	}


	#block-table-qa .list-style .title-style {
		font-size: 15px;
		border: 1px solid #0B54F7;
		text-align: left;
		padding-left: 10px;
	} 
	#block-table-qa .list-style .title-style.one {
		background: #0B54F7;
		color: white;
		font-weight: 600;
		padding: 10px 0px;
		text-align:center;
	}
	#block-table-qa .list-style .item-style .text-style.one {
		background: #0B54F7;
		color: white;
		font-weight: 600;
		padding: 10px 10px;
		text-align:center;
	}


	#block-table-qa .list-style .text-style {
		border: 1px solid #0B54F7;
		text-align: left;
		padding: 10px 10px;
		border-top: none;
	}

	#block-table-qa {
		overflow: auto;
		padding-bottom: 30px;
	}

	#block-table-qa .list-style{
		width: 1024px;
		overflow: auto;
	}
	#qa-archive .box-interdepend-add  .box-interdepend .img-logo {
		width: 130px;
		height: 100%;
	}
	#qa-archive .box-interdepend-add .box-interdepend .link-seminar {
		width: calc(100% - 215px);
		display: block;
		order: 1;
		font-size: 16px;
		line-height: 2.47;
		text-align: left;
		color: #0b54f7;
		margin: 0 0 0 32px;
	}
	#qa-archive .box-interdepend-add .box-interdepend {
		width:auto;
	}	
	#qa-archive .box-interdepend-add .box-interdepend .box-item	{
		height: 90px;
		border-radius: 22px;
	}
	#qa-archive .box-interdepend-add .box-interdepend .img-logo img {
		width: 100%;
		border-top-right-radius: 20px;
		border-bottom-right-radius: 20px;
		position: relative;
		z-index: -1;
		height: 100%;
		object-fit: cover;
	}
	#qa-archive  .box-interdepend-add .box-interdepend .link-seminar .link-seminar-text:before {
		top: -50px;
	}
	@media print, screen and (min-width: 768px) {/* ---------- タブレット・PC以上 ---------- */

		/* -----style----- */
		#block-table-qa {
			padding: 0px 0px 50px;
		}
		.note-title {
			font-size: 18px;
			line-height: 36px;
			margin-bottom: 50px;
		}
		#block-table-qa{
			overflow: initial;
			padding-bottom: 30px;

		}
		#block-table-qa .note-style {
			left: unset;
			right: 0px;
			bottom: 0px;
		}
		#block-table-qa .list-style{
			width: auto;
			overflow: auto;
		}


	}	
	@media print, screen and (max-width: 768px) {/* ---------- タブレット・PC以上 ---------- */


		#qa-archive .box-interdepend-add .box-interdepend {
			display:none !important
		}
	}





</style>



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




	/* css add 2024  */
	#qa-archive  .title-box .list-cat.child .item-cate	{
		background: #0B54F7 ;
		color: white ;
	}
	#qa-archive .title-box.child {
		justify-content:start;
		padding-left: 30px;
	}
	#qa-archive .sub-listMenu .sub-itemMenu {
		width:100% !important;

	}	
	#allSeminar .category-seminar {
		padding-right: 0px !important;	
	}	
	#qa-archive .ranking-box.full {
		max-width:100%;
		display:flex;
		justify-content:space-between
	}	
	#qa-archive .ranking-box.full .raking-item {
		width:calc(50% - 15px);
		margin-bottom:50px
	}	

	#qa-archive .all-child .item-cate {
		padding: 3px 20px 4px;
		border: 1px solid #0B54F7;
		border-radius: 20px;
		text-align: center;
		margin-left: 5px;
		background: #0B54F7;
		color: white;
		margin-bottom:10px
	}

	#qa-archive #bock-sevice .box-contact .list-img .item-img {
		width: calc(100% / 2) !important;
	}
	#qa-archive .box-contact .left-contact {
		width: 70%;

	}	
	#qa-archive .box-contact .right-contact {
		width: 30%;

	}	
	@media (max-width: 768px) {
		#qa-archive .box-contact .left-contact {
			width: 100%;

		}	
		#qa-archive .box-contact .right-contact {
			width: 100%;
		}	
		#allSeminar .box-contact .left-contact	{
			width:100% !important;
		}

		#allSeminar .box-contact .right-contact	{
			width:100% !important;
		}	
		#bock-sevice .box-contact .list-img .item-img {
			width:calc(50%) !important;
		}
		#qa-archive .ranking-box.full .raking-item {
			width:100% !important;
		}
		#qa-archive .ranking-box.full {
			flex-direction:column;
		}
        .views-other .ul-followedposts a{
            font-size: 16px;
            line-height: 24px;
        }
	}		



</style>


<div id="allSeminar" class="columns-container">

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
				<div class="qa-main">
					<div class="single-qa">
						<div class="title-box">
							<p class="cate">カテゴリー</p>
							<ul class="list-cat">
								<!--<?php 
foreach ($term_name as $term_name_item) {
	echo '<li class="item-cate">'.$term_name_item.'</li>';
} 
?>      -->

								<?php 
								if ($terms && !is_wp_error($terms)) {
									$category_links = array();
									foreach ($terms as $term) {
										if (0 == $term->parent) {
											$category_links[] = '<a class="item-cate" href="' . esc_url(get_term_link($term)) . '">' . esc_html($term->name).'（' . esc_html($term->count) . ') </a>';
										}
									}
									echo implode('', $category_links);
								}
								?>
							</ul>
							<p class="time"><?php echo $qa_date; ?></p>

						</div>

<!--						<div class="title-box child">-->
<!--							--><?php //
//							$args = array(
//								'taxonomy' => 'qa-tag',
//								'post_status' => 'publish',
//								'parent' => 0
//							);
//							$query = new WP_Query(array('post_type'=>'qa_detail', 'post_status'=>'publish'));
//							$count_posts = $query->found_posts;
//							?>
<!--							<div class="subMenu">-->
<!--								<ul class="list-cat child">	-->
<!---->
<!--									--><?php
//									$cats = get_categories($args);
//									ob_start();
//									foreach ($cats as $cat) {
//										if (stripos( $_SERVER['REQUEST_URI'] , $cat->slug ) !== false) {
//											$is_active =  ' is-active';
//										}
//										else {
//											$is_active =  '';
//										}
//										$cat_link = get_category_link($cat->term_id);
//										echo '<li class="item-tag-download'.$is_active.'"><a class="item-cate" href="'.$cat_link.'" title="'.$cat->name.'">'.$cat->name.'（ '. $cat->count . '）</a></li>';
//									}
//									$cat_list = ob_get_contents();
//									ob_end_clean();
//									echo $cat_list;
//									?>
<!--								</ul>-->
<!--							</div>-->
<!--						</div>-->
						<dl class="dl-content qa_detail_single">
							<h4 class="single-title">
								<span class="qa_label">Q.</span>
								<?php echo $qa_title ?>
							</h4>
							<dt class="dt-single">
								<span class="qa_label">A.</span>
								<?php echo $qa_answer_ttl ?> 
							</dt>
                            <?php if($qa_answer_txt): ?>
                                <dd class="dd-single"><?php echo $qa_answer_txt; ?></dd>
                            <?php endif; ?>
						</dl>

					</div>
					<div class="qa-sidebar">
						<h3 class="title-seminar">カテゴリーで探す</h3>
						<?php get_template_part('template-parts/qa-sidebar'); ?>
					</div>
                </div>

                <?php
                $wherego = do_shortcode('[wherego]');
                $clean_content = trim(preg_replace('/\s+/', '', strip_tags($wherego)));

                if (!empty($clean_content)): ?>
                    <div class="views-other">
                        <?php echo $wherego; ?>
                    </div>
                <?php endif; ?>

                <!-------- code checkbox service --------------->
                <?php  if( $CheckService): ?>
                <?php foreach ( $CheckService  as $CheckService_item) :
                if( $CheckService_item == "tech"): ?>
                <div id="allService">
                    <ul class="list-service flex">
                        <li class="item-service js-fadein">
                            <div class="title-center flex"><span class="title-service">クラウドサービス</span></div>
                            <a href="<?php bloginfo('url');?>/service/cloud/">
                                <div class="box-top-service flex">
                                    <picture class="img-icon">
                                        <source srcset="<?php bloginfo('template_url');?>/images/top_service_icon_02.png">
                                        <img class="sizes"
                                             src="<?php bloginfo('template_url');?>/images/top_service_icon_02.png" alt="">
                                    </picture>
                                    <p class="text-item">外国人の雇用時に必要な書類管理を<br>クラウドサービスで効率化。<br>あなたの業務を支援します。</p>
                                </div>
                                <div class="box-img-down flex">
                                    <div class="icon-left">
                                        <picture class="img-icon one">
                                            <source srcset="<?php bloginfo('template_url');?>/images/top_service_icon_01a.png">
                                            <img class="sizes" src="<?php bloginfo('template_url');?>/images/top_service_icon_01a.png" alt="">
                                        </picture>
                                        <picture class="img-icon">
                                            <source srcset="<?php bloginfo('template_url');?>/images/top_service_icon_01b.png">
                                            <img class="sizes" src="<?php bloginfo('template_url');?>/images/top_service_icon_01b.png" alt="">
                                        </picture>
                                    </div>
                                    <picture class="img-icon last">
                                        <source media="(max-width: 767px)" srcset="<?php bloginfo('template_url');?>/images/top_service_icon_01c_sp.png">
                                        <source media="(min-width: 768px)" srcset="<?php bloginfo('template_url');?>/images/top_service_icon_01c_pc.png">
                                        <img class="sizes" src="<?php bloginfo('template_url');?>/images/top_service_icon_01c_pc.png" alt="">
                                    </picture>
                                </div>
                            </a>
                            <div class="box-link-page flex">
                                <a href="<?php bloginfo('url');?>/service/cloud/" class="link-page">詳しく見る</a>
                            </div>
                        </li>
                    </ul>
                </div>

                <?php elseif( $CheckService_item == "job"): ?>
                <div id="allService">
                    <ul class="list-service flex">
                        <li class="item-service js-fadein">
                            <div class="title-center flex"><span class="title-service">労務代行サービス</span></div>
                            <a href="<?php bloginfo('url');?>/service/assistant/">
                                <div class="box-top-service flex">
                                    <picture class="img-icon">
                                        <source srcset="<?php bloginfo('template_url');?>/images/top_service_icon_01.png">
                                        <img class="sizes"
                                             src="<?php bloginfo('template_url');?>/images/top_service_icon_01.png" alt="">
                                    </picture>
                                    <p class="text-item">外国人採用の入社から退職まで徹底サ<br>ポート。手続きが初めての方でも安心して外国人を受け入れます。</p>

                                </div>
                                <div class="box-text flex two">
                                    <p class="item-text left">入管書類アドバイス</p>
                                    <p class="item-text right">契約書類の翻訳</p>
                                    <p class="item-text left">給与計算・保険手続き</p>
                                    <p class="item-text right">出入国サポート</p>
                                </div>
                            </a>
                            <div class="box-link-page flex">
                                <a href="<?php bloginfo('url');?>/service/assistant/" class="link-page">詳しく見る</a>
                            </div>
                        </li>
                    </ul>
                </div>

                <?php elseif( $CheckService_item == "life"): ?>
                <div id = "allService">
                    <ul class="list-service flex">
                        <li class="item-service js-fadein">
                            <div class="title-center flex"><span class="title-service">外国人生活支援サービス</span></div>
                            <a href="<?php bloginfo('url');?>/service/life-support/">
                                <div class="box-top-service flex">
                                    <picture class="img-icon">
                                        <source srcset="<?php bloginfo('template_url');?>/images/top_service_icon_03.png">
                                        <img class="sizes"
                                             src="<?php bloginfo('template_url');?>/images/top_service_icon_03.png" alt="">
                                    </picture>
                                    <p class="text-item">日常生活から緊急時まで徹底した<br>トータルサポートをお約束します。<br>日本での生活をもっと快適に。</p>
                                </div>
                                <div class="box-text flex three">
                                    <p class="item-text three">インフラ代行</p>
                                    <p class="item-text three">教育プラン</p>
                                    <p class="item-text full">24 時間対応コンシェルプラン</p>
                                </div>
                            </a>
                            <div class="box-link-page flex">
                                <a href="<?php bloginfo('url');?>/service/life-support/" class="link-page">詳しく見る</a>
                            </div>
                        </li>
                    </ul>
                </div>
                <?php elseif( $CheckService_item == "legal"): ?>
                <div id = "allService">
                    <ul class="list-service flex">
                        <li class="item-service js-fadein">
                            <div class="title-center flex"><span class="title-service">専門家無料相談サービス</span></div>
                            <a href="<?php bloginfo('url');?>/service/consultation/">
                                <div class="box-top-service flex">
                                    <picture class="img-icon">
                                        <source srcset="<?php bloginfo('template_url');?>/images/top_service_icon_04.png">
                                        <img class="sizes" src="<?php bloginfo('template_url');?>/images/top_service_icon_04.png" alt="">
                                    </picture>
                                    <p class="text-item">海外人材活用に関する疑問を、<br>専門の社労士・行政書士が解決。<br>些細なことでもご連絡ください。</p>
                                </div>
                                <div class="box-img-down">
                                    <picture class="img-icon text">
                                        <source srcset="<?php bloginfo('template_url');?>/images/top_service_icon_04a.png">
                                        <img class="sizes"
                                             src="<?php bloginfo('template_url');?>/images/top_service_icon_04a.png" alt="">
                                    </picture>
                                </div>
                            </a>
                            <div class="box-link-page flex">
                                <a href="<?php bloginfo('url');?>/service/consultation/" class="link-page">詳しく見る</a>
                            </div>
                        </li>
                    </ul>
                </div>
                <?php elseif( $CheckService_item == ""): ?>
                <div id = "allService">
                </div>

                <?php endif; ?>
                <?php endforeach; ?>
                <?php endif; ?>


			</div>
		</div>
	</div>

    <?php get_template_part("template-parts/banner-other"); ?>

    <?php get_template_part("template-parts/support"); ?>

    <?php get_template_part("template-parts/line-up"); ?>

    <?php get_template_part("template-parts/contact-bottom"); ?>

</div>
<?php get_footer(); ?>