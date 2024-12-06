<?php
get_header();
global $post, $wp_query;
$today = date('Y-m-d H:i');
?>
<div id="allSeminar" class="columns-container">
	<div class="pageTitle">
		<h2><span class="en montserrat">SEMINAR INFORMATION</span>外国人採用に関する<br class="sp-br">セミナー情報</h2>
	</div>
	<div id="breadcrumb" class="breadcrumb">
		<ol>
			<li>
				<a href="<?php echo home_url(); ?>">トップページ</a>&nbsp;&nbsp;<i class="fa-solid fa-chevron-right"></i>
			</li>
			<li>
				<span>外国人採用に関するセミナー情報</span>
			</li>
		</ol>
	</div>

	<div class="inner">
		<div class="seminar-special">
			<h4 class="title-special">開催予定セミナーピックアップ</h4>
			<ul class="list-columns flex">
				<?php
				$today = date('Y-m-d H:i');

				/*
                $terms = get_terms('seminar_featured');
                $seminar_featured_slug = array();

                foreach( $terms as $term ) {
                    $seminar_featured_slug[] = $term->slug;
                }
				*/

				$args = array(
					'post_type' => 'seminar',
					'post_status' => 'publish',
					'posts_per_page' => 3,
					'meta_key' => 'seminar_close_date_apply',
					'orderby' => 'meta_value',
					'order' => 'DESC',
					'cache_results'          => true,
					'update_post_meta_cache' => true,
					'update_post_term_cache' => true,
					/*
                    'tax_query' => array(
                        array(
                            'taxonomy' => 'seminar_featured',
                            'field' => 'slug',
                            'terms' => $seminar_featured_slug,
                            'operator' => 'IN',
                        ),
                    ),
					*/
					'meta_query' => array(
						array(
							'key' => 'seminar_date_seminar_close_date',
							'value' => $today,
							'compare' => '>=',
							'type' => 'date',
						)
					)
				);

				$posts = new WP_Query( $args );

				if ( $posts-> have_posts() ) : ?><?php while ( $posts->have_posts() ) : $posts->the_post(); ?>
				<?php
				$post_id = $post->ID;
				$post_link = get_the_permalink($post_id);
				$post_title = get_the_title($post_id);

				$post_key = get_the_terms($post_id, 'seminar_featured' )[0]->name;

				$seminar_date       = get_field( 'seminar_date' );
				$seminar_start_date = date_create( $seminar_date['seminar_start_date'], wp_timezone() );
				$seminar_close_date = date_create( $seminar_date['seminar_close_date'], wp_timezone() );
				$seminar_day_locale = gms_get_day_locale( (int) $seminar_start_date->format( 'w' ) );

				$seminar_date_apply = $seminar_start_date->format('Y年n月j日') . '(' . $seminar_day_locale . ')';

				$seminar_time_apply = $seminar_start_date->format('H:i') . '〜' . $seminar_close_date->format('H:i');

				if (has_post_thumbnail($post_id)) {
					$post_thumbnail = get_the_post_thumbnail($post_id, 'post-thumbnail', array( 'class' => 'sizes' ));
				} else {
					$post_thumbnail = '<img src="'.bloginfo('template_url').'/img/noimage.jpg" alt="" class="sizes">';
				}
				$post_cats = get_the_terms($post_id, 'seminar_tag' );
				ob_start();
				if ($post_cats){
					foreach ($post_cats as $cat) {
						$cat_link = get_category_link($cat->term_id);
						echo '<div class="item-tag-column"><a href="'.$cat_link.'" title="'.$cat->name.'">'.$cat->name.'</a></div>';
					}
					$cat_list = ob_get_contents();
				}

				ob_end_clean();
				?>

				<li class="item-column top">
					<div class="col-content">
						<div class="box-title flex">
							<span class="title-seminar"><?php echo $post_key ?></span>
						</div>
						<div class="img-post">
							<a href="<?php echo $post_link ?>">
								<?php echo $post_thumbnail ?>
							</a>
							<a href="<?php echo $post_link ?>" class="accept">受付中</a>
						</div>
						<div class="info-item">
							<a class="item-link" href="<?php echo $post_link ?>" title="<?php echo $post_title ?>">
								<p class="title"><?php echo $post_title ?></p>
							</a>
							<div class="date-time flex">
								<a href="<?php echo $post_link ?>" class="accept-down">受付中</a>
								<p class="date"><?php echo $seminar_date_apply ?></p>
								<p class="time"><?php echo $seminar_time_apply ?></p>
							</div>
							<div class="list-tag-column flex">
								<?php echo $cat_list ?>
							</div>
							<a href="<?php echo $post_link ?>" class="application">申し込む</a>
						</div>
					</div>
				</li>
				<?php endwhile; ?>
				<?php endif;
				//wp_reset_postdata();
				?>
			</ul>
		</div>

		<div class="content-main">
			<h3 class="title-seminar">開催済みセミナーを<br class="sp-br">カテゴリーで探す <span
																				class="note-title">開催済みのセミナーは資料ダウンロード可能です</span></h3>
			<div class="block-main flex">
				<div class="category-seminar">
					<?php
					$args = array(
						'taxonomy' => 'seminar_tag',
						'hide_empty' => false,
						'parent' => 0
					);
					?>
					<div class="subMenu">
						<ul class="sub-listMenu">
							<li class="sub-itemMenu is-active all">
								<a href="<?php echo home_url(); ?>/seminar" title="すべて">すべて</a>
							</li>
							<?php
							$cats = get_categories($args);
							ob_start();
							foreach ($cats as $cat) {
								$cat_link = get_category_link($cat->term_id);
								echo '<li class="sub-itemMenu"><a href="'.$cat_link.'" title="'.$cat->name.'">'.$cat->name.'</a></li>';
							}
							$cat_list = ob_get_contents();
							ob_end_clean();
							echo $cat_list;
							?>
						</ul>
					</div>
				</div>

				<div class="all-seminar">
					<ul class="list-columns flex">
						<?php
						$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
						$args = array(
							'post_type'=> 'seminar',
							'post_status' => 'publish',
							'order'    => 'DESC',
							'paged'  => $paged,
							'posts_per_page' => "9",
							'meta_query' => array(
								array(
									'key' => 'seminar_date_seminar_close_date',
									'value' => $today,
									'compare' => '<',
									'type' => 'date',
								)
							)
						);
						$result = new WP_Query( $args );
						if ( $result-> have_posts() ) : ?>
						<?php while ( $result->have_posts() ) : $result->the_post() ; ?>
						<?php
						$post_id = $post->ID;
						$post_link = get_the_permalink($post_id);
						$post_title = get_the_title($post_id);

						$seminar_date       = get_field( 'seminar_date' );
						$seminar_start_date = date_create( $seminar_date['seminar_start_date'], wp_timezone() );
						$seminar_close_date = date_create( $seminar_date['seminar_close_date'], wp_timezone() );
						$seminar_day_locale = gms_get_day_locale( (int) $seminar_start_date->format( 'w' ) );

						$seminar_date_apply = $seminar_start_date->format('Y年n月j日')
							. '(' . $seminar_day_locale . ')';

						$seminar_time_apply = $seminar_start_date->format('H:i')
							. '〜' . $seminar_close_date->format('H:i');

						if (has_post_thumbnail($post_id)) {
							$post_thumbnail = get_the_post_thumbnail($post_id, 'post-thumbnail', array( 'class' => 'sizes' ));
						} else {
							$post_thumbnail = '<img src="'.bloginfo('template_url').'/img/noimage.jpg" alt="" class="sizes">';
						}
						?>
						<li class="item-column">
							<div class="col-content">
								<a class="item-link" href="<?php echo $post_link; ?>">
									<div class="img-post">
										<?php echo $post_thumbnail; ?>
									</div>
								</a>
								<div class="info-item">
									<p class="title"><?php echo $post_title ?></p>
									<div class="date-time flex">
										<p class="date"><?php echo $seminar_date_apply; ?></p>
										<p class="time"><?php echo $seminar_time_apply; ?></p>
									</div>
									<div class="list-tag-column flex">
										<?php
										$list_cats = get_the_terms($post->ID, 'seminar_tag' );
										ob_start();
										foreach ($list_cats as $cat) {
											$cat_link = get_category_link($cat->term_id);
											echo '<div class="item-tag-column"><a href="'.$cat_link.'" title="'.$cat->name.'">'.$cat->name.'</a></div>';
										}
										$cat_list = ob_get_contents();
										ob_end_clean();
										echo $cat_list;
										?>
									</div>
								</div>
							</div>
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
					<div id="breadcrumb-footer" class="breadcrumb">
						<ol>
							<li>
								<a href="<?php echo home_url(); ?>">トップページ</a>&nbsp;&nbsp;<i class="fa-solid fa-chevron-right"></i>
							</li>
							<li>
								<span>外国人採用に関するセミナー情報</span>
							</li>
						</ol>
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

	<div id="bock-sevice">
		<div class="contact-page">
			<div class="inner">
				<h3 class="title-home" data-aos="fade-up">
					<span class="text-es montserrat">CONTACT</span><br>
					<span class="text-jp">サービスに関する<br class="sp-br">お問い合わせ・ご相談</span><br>
					<span class="text-des">お気軽にご連絡ください。</span>
				</h3>
				<div class="box-contact allseminar" data-aos="fade-up">
					<a href="" class="a-box flex">
						<div class="left-contact">
							<p class="text-01">外国人材採用の注意点や、<br class="sp-br">トラブルなど学べるセミナーを<br class="sp-br">ご視聴できます。</p>
							<p class="link-contact destop" target="_blank">各種セミナー申し込みや、ご質問はこちら</p>
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
							<p class="title">外国人の雇用方法や<br class="sp-br">注意点が学べるセミナー</p>
							<picture class="box-img">
								<source srcset="<?php bloginfo('template_url');?>/images/top_seminar_04.png">
								<img class="sizes" src="<?php bloginfo('template_url');?>/images/top_seminar_04.png" alt="">                            
							</picture>
						</div>
					</a>
				</div>
			</div>
		</div>
	</div>
</div>

<?php get_footer(); ?>