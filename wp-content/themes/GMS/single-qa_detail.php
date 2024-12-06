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
	#qa-archive .views-other h3 {
		font-size:28px;
		text-align:left;
		margin-bottom:10px
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
		#allSeminar .wherego_related.wherego_related_shortcode {
			width:100%;
			padding:20px;
		}
	}		



</style>


<div id="allSeminar" class="columns-container">
	<div class="pageTitle" id="banner-qa">
		<div class="inner">
			<h2><span class="en">REFERENCE CASE Q&A</span>よくあるご質問や問題事例</h2>
			<div class="contents-block qa-search-block">
				<form id="qa-search" action="<?php bloginfo('url');?>/qa_detail">
					<div class="search-box">
						<?php
						$keyword = '';
						if(isset($_GET) && $_GET['s']) :
						$keyword = $_GET['s'];
						endif;
						?>
						<input class="search-txt" type="text" name="s" value="<?php echo $keyword; ?>" placeholder="フリー検索">
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
				<a href="<?php bloginfo('url');?>/qa">外国人材Q&A</a>&nbsp;&nbsp;<i class="fa-solid fa-chevron-right"></i>
			</li>
			<li>
				<?php echo $qa_date; ?>
			</li>
		</ol>
	</div>
	<section id="qa-archive">
		<div class="inner">
			<div class="content-main">
				<div class="block-main flex">
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

						<!-- <div class="title-box child">
<ul class="list-cat child">
<?php 
if ( $terms && !is_wp_error( $terms ) ) {
	foreach ( $terms as $term ) {
		$term_id = $term->term_id;
		$child_terms = get_term_children( $term_id, 'qa_list' );
		if ( $child_terms && !is_wp_error( $child_terms ) ) {
			foreach ( $child_terms as $child_term_id ) {
				$child_term = get_term( $child_term_id, 'qa_list' );
				echo '<a class="item-cate" href="' . get_term_link( $child_term ) . '">' . $child_term->name . '</a><br>';
			}
		}
	}
}

?> 
</ul>
</div> -->


						<div class="title-box child">
							<?php 
							$args = array(       
								'taxonomy' => 'qa-tag',
								'post_status' => 'publish',
								'parent' => 0
							);
							$query = new WP_Query(array('post_type'=>'qa_detail', 'post_status'=>'publish'));
							$count_posts = $query->found_posts;
							?>
							<div class="subMenu">
								<ul class="list-cat child">	

									<?php
									$cats = get_categories($args);
									ob_start();
									foreach ($cats as $cat) {
										if (stripos( $_SERVER['REQUEST_URI'] , $cat->slug ) !== false) {
											$is_active =  ' is-active';
										}
										else {
											$is_active =  '';
										}
										$cat_link = get_category_link($cat->term_id);
										echo '<li class="item-tag-download'.$is_active.'"><a class="item-cate" href="'.$cat_link.'" title="'.$cat->name.'">'.$cat->name.'（ '. $cat->count . '）</a></li>';
									}
									$cat_list = ob_get_contents();
									ob_end_clean();
									echo $cat_list;
									?>
								</ul>
							</div>
						</div>


						<dl class="dl-content qa_detail_single">
							<h4 class="single-title">
								<span class="qa_label">Q</span>
								<?php echo $qa_title ?>
							</h4>
							<dt class="dt-single">
								<span class="qa_label">A</span>
								<?php echo $qa_answer_ttl ?> 
							</dt>
							<dd class="dd-single"><?php echo $qa_answer_txt; ?></dd>
						</dl>
						<div class="views-other">
							<?php echo do_shortcode('[wherego]');?>


						</div>

					</div>
					<div class="ranking-box">
						<h3 class="title-seminar">カテゴリーで探す</h3>
						<?php get_template_part('template-parts/qa-sidebar'); ?>
						<div class="box-interdepend-add">

							<!-------- interdepend_qa --------------->
							<div class="box-interdepend">   
								<?php  if($qa_relate): ?>
								<a href="<?php echo $qa_relate ?>" target="_blank" class="box-item dowload flex" >
									<picture class="img-logo">
										<source  srcset="https://gms.ca-m.co.jp/wp/wp-content/uploads/2023/03/check_0001@2x.png">
										<img src="https://gms.ca-m.co.jp/wp/wp-content/uploads/2023/03/check_0001@2x.png" alt="">
									</picture>
									<div class="link-seminar">
										<p class="link-seminar-text">関連する資料はこちら</p>
									</div>

									<?php endif; ?>
								</a>




								<?php  if( $interdepend_video !=""): ?>
								<a href="<?php echo $interdepend_video ?>" target="_blank" class="box-item seminar flex" >
									<picture class="img-logo">
										<source  srcset="https://gms.ca-m.co.jp/wp/wp-content/uploads/2023/03/pixta_70646155_M.jpg">
										<img class="sizes" src="https://gms.ca-m.co.jp/wp/wp-content/uploads/2023/03/pixta_70646155_M.jpg" alt="">
									</picture>
									<div  class="link-seminar">
										<p class="link-seminar-text">関連セミナー</p>
									</div>

								</a>
								<?php endif; ?>
								<?php  if( $interdepend_seminar !="" ): ?>
								<a href="<?php echo $interdepend_seminar ?>" target="_blank" class="box-item dowload flex" >
									<picture class="img-logo">
										<source  srcset="https://gms.ca-m.co.jp/wp/wp-content/uploads/2023/03/pixta_67768769_M1.png">
										<img class="sizes top_007" src="https://gms.ca-m.co.jp/wp/wp-content/uploads/2023/03/pixta_67768769_M1.png" alt="">
									</picture>
									<div  class="link-seminar">
										<p class="link-seminar-text">関連セミナー動画</p>
									</div>

								</a>
								<?php endif; ?>
							</div>
							<!--------END  interdepend_qa --------------->

						</div>
					</div>

					<!-------- interdepend_qa --------------->
					<div class="box-interdepend">   
						<?php  if($qa_relate): ?>
						<a href="<?php echo $qa_relate ?>" target="_blank" class="box-item dowload flex" >
							<picture class="img-logo">
								<source  srcset="https://gms.ca-m.co.jp/wp/wp-content/uploads/2023/03/check_0001@2x.png">
								<img src="https://gms.ca-m.co.jp/wp/wp-content/uploads/2023/03/check_0001@2x.png" alt="">
							</picture>
							<div class="link-seminar">
								<p class="link-seminar-text">関連する資料はこちら</p>
							</div>

							<?php endif; ?>
						</a>




						<?php  if( $interdepend_video !=""): ?>
						<a href="<?php echo $interdepend_video ?>" target="_blank" class="box-item seminar flex" >
							<picture class="img-logo">
								<source  srcset="https://gms.ca-m.co.jp/wp/wp-content/uploads/2023/03/pixta_70646155_M.jpg">
								<img class="sizes" src="https://gms.ca-m.co.jp/wp/wp-content/uploads/2023/03/pixta_70646155_M.jpg" alt="">
							</picture>
							<div  class="link-seminar">
								<p class="link-seminar-text">関連セミナー</p>
							</div>

						</a>
						<?php endif; ?>
						<?php  if( $interdepend_seminar !="" ): ?>
						<a href="<?php echo $interdepend_seminar ?>" target="_blank" class="box-item dowload flex" >
							<picture class="img-logo">
								<source  srcset="https://gms.ca-m.co.jp/wp/wp-content/uploads/2023/03/pixta_67768769_M1.png">
								<img class="sizes top_007" src="https://gms.ca-m.co.jp/wp/wp-content/uploads/2023/03/pixta_67768769_M1.png" alt="">
							</picture>
							<div  class="link-seminar">
								<p class="link-seminar-text">関連セミナー動画</p>
							</div>

						</a>
						<?php endif; ?>
					</div>
					<!--------END  interdepend_qa --------------->

					<div class="box_qa_list">
						<?php get_template_part('block-service/block-qa'); ?>
					</div>

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


					<div class="all-qa single">
						<h3 class="title-seminar">同じカテゴリの人気Q&A</h3>
						<?php
						$args = array(
							'post_type'=> 'qa_detail',
							'post_status' => 'publish',
							'order'    => 'DESC',                              
							'numberposts' => "15",
							'tax_query' => array(
								array(
									'taxonomy' => 'qa_list',               
									'field' => 'id',
									'terms' => $term_ids,
									'operator'=> 'IN'    
								),
							),   
							'post__not_in'=>array($post->ID)                          
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
					</div>
					<!-- <div class="box-more">
<a href="<?php bloginfo('url');?>/qa" class="more-single">もっと見る</a>
</div> -->

					<!-- chuyen vi tri ranking -->

					<div class="ranking-box full">
						<?php get_template_part('template-parts/ranking_qa'); ?>

					</div>	

					<!-- chuyen vi tri ranking -->
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
		<div id="bock-sevice">
			<div class="contact-page">
				<div class="inner">
					<h3 class="title-home" data-aos="fade-up">
						<span class="text-es montserrat">CONTACT</span><br>
						<span class="text-jp">サービスに関する<br class="sp-br">お問い合わせ・ご相談</span><br>
						<span class="text-des">お気軽にご連絡ください。</span>
					</h3>
					<div class="box-contact" data-aos="fade-up">
						<a href="" class="a-box flex">
							<div class="left-contact">
								<p class="text-01">その疑問、私たちにお任せください。<br class="pc-br">社労士・行政書士が無料でお答えします。</p>
								<p class="link-contact destop" target="_blank">契約やトラブル相談、お気軽にご連絡ください。</p>
								<p class="link-contact mobi" target="_blank">契約やトラブル相談はこちら</p>
								<div class="phone flex">
									<div class="phone-left">
										<div class="top">
											<picture class="box-img">
												<source srcset="<?php bloginfo('template_url');?>/images/top_icon_contact.png">
												<img class="sizes" src="<?php bloginfo('template_url');?>/images/top_icon_contact.png" alt="">
											</picture>
											<span class="text-phone">お問合せフリーダイアル</span>
										</div>
										<p class="time">営業時間:10時〜18時（月〜金）</p>
									</div>
									<p class="number-phone montserrat">0120-530-451</p>
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