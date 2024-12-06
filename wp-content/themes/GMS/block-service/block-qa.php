<?php
global $post, $pid;
$parent = get_page($post->post_parent);
$parent_slug = $parent->post_name;

if ($parent_slug == 'service' && (stripos($_SERVER['REQUEST_URI'], 'cloud' ) !== false)) {
	$service_other_01_img = get_bloginfo('template_url') . '/images/service/service_other_01.png';
	$title_other01 = '労務代行サービス';
	$link_other01 = get_bloginfo('url') . '/service/assistant/';
	$service_other_02_img = get_bloginfo('template_url') . '/images/service/service_other_02.png';
	$title_other02 = '外国人生活支援サービス';
	$link_other02 = get_bloginfo('url') . '/service/life-support/';
	$service_contact = get_bloginfo('template_url') . '/images/service/service_concact01.png';
	$link_other03 = get_bloginfo('url') . '/service/consultation/';
}
if ($parent_slug == 'cloud' && (stripos($_SERVER['REQUEST_URI'], 'maetra' ) !== false)) {
	$service_other_01_img = get_bloginfo('template_url') . '/images/service/service_other_03.png';
	$title_other01 = 'クラウドサービス';
	$link_other01 = get_bloginfo('url') . '/service/cloud/';
	$service_other_02_img = get_bloginfo('template_url') . '/images/service/service_other_01.png';

	$title_other02 = '外国人生活支援サービス';
	$link_other02 = get_bloginfo('url') . '/service/life-support/';
	$service_contact = get_bloginfo('template_url') . '/images/service/service_concact04.png';
	$link_other03 = get_bloginfo('url') . '/service/consultation/';
}
if ($parent_slug == 'service' && (stripos($_SERVER['REQUEST_URI'], 'assistant' ) !== false)) {
	$service_other_01_img = get_bloginfo('template_url') . '/images/service/service_other_03.png';
	$title_other01 = 'クラウドサービス';
	$link_other01 =get_bloginfo('url') . '/service/cloud/';
	$service_other_02_img = get_bloginfo('template_url') . '/images/service/service_other_02.png';
	$title_other02 = '労務代行サービス';
	$link_other02 =get_bloginfo('url') . '/service/assistant/';
	$service_contact = get_bloginfo('template_url') . '/images/service/service_concact02.png';
	$link_other03 = get_bloginfo('url') . '/service/consultation/';
}
if ($parent_slug == 'service' && (stripos($_SERVER['REQUEST_URI'], 'immigration' ) !== false)) {
	$service_other_01_img = get_bloginfo('template_url') . '/images/service/service_other_03.png';
	$title_other01 = 'クラウドサービス';
	$link_other01 = get_bloginfo('url') . '/service/cloud/';
	$service_other_02_img = get_bloginfo('template_url') . '/images/service/service_other_01.png';
	$title_other02 = '労務代行サービス';
	$link_other02 = get_bloginfo('url') . '/service/assistant/';
	$service_contact = get_bloginfo('template_url') . '/images/service/service_concact02.png';
	$link_other03 = get_bloginfo('url') . '/service/consultation/';
}
if ($parent_slug == 'service' && (stripos($_SERVER['REQUEST_URI'], 'life-support' ) !== false)) {
	$service_other_01_img = get_bloginfo('template_url') . '/images/service/service_other_03.png';
	$title_other01 = 'クラウドサービス';
	$link_other01 =get_bloginfo('url') . '/service/cloud/';
	$service_other_02_img = get_bloginfo('template_url') . '/images/service/service_other_01.png';
	$title_other02 = '労務代行サービス';
	$link_other02 =get_bloginfo('url') . '/service/assistant/';
	$service_contact = get_bloginfo('template_url') . '/images/service/service_concact03.png';
	$link_other03 = get_bloginfo('url') . '/service/consultation/';
}
if ($parent_slug == 'service' && (stripos($_SERVER['REQUEST_URI'], 'consultation' ) !== false)) {
	$service_other_01_img = get_bloginfo('template_url') . '/images/service/service_other_03.png';
	$title_other01 = 'クラウドサービス';
	$link_other01 =get_bloginfo('url') . '/service/cloud/';
	$service_other_02_img = get_bloginfo('template_url') . '/images/service/service_other_01.png';
	$title_other02 = '労務代行サービス';
	$link_other02 = get_bloginfo('url') . '/service/assistant/';
	$classother="last-other";
	$service_other_03_img = get_bloginfo('template_url') . '/images/service/service_other_02.png';
	$title_other03 = '外国人生活支援サービス';
	$link_other03 = get_bloginfo('url') . '/service/life-support/';
	$service_contact = get_bloginfo('template_url') . '/images/service/service_concact01.png';
}
if ($parent_slug == 'case_study') {
	$nocasestudy = "nocastudy";
	$service_contact = get_bloginfo('template_url') . '/images/service/service_concact03.png';
}
if ($parent_slug == 'complete_download') {
	$nocasestudy = "nocastudy";
	$service_contact = get_bloginfo('template_url') . '/images/service/service_concact01.png';
}
if ($parent_slug == 'cloud' && (stripos($_SERVER['REQUEST_URI'], 'camcat' ) !== false)) {
	$service_other_01_img = get_bloginfo('template_url') . '/images/service/service_other_03.png';
	$title_other01 = 'クラウドサービス';
	$link_other01 = get_bloginfo('url') . '/service/cloud/';
	$service_other_02_img = get_bloginfo('template_url') . '/images/service/service_other_01.png';
	$title_other02 = '外国人生活支援サービス';
	$link_other02 = get_bloginfo('url') . '/service/life-support/';
	$service_contact = get_bloginfo('template_url') . '/images/service/service_concact04.png';
	$link_other03 = get_bloginfo('url') . '/service/consultation/';

}
if ($parent_slug == 'translate') {
	$service_other_01_img = get_bloginfo('template_url') . '/images/service/service_other_03.png';
	$title_other01 = 'クラウドサービス';
	$link_other01 =get_bloginfo('url') . '/service/cloud/';
	$service_other_02_img = get_bloginfo('template_url') . '/images/service/service_other_02.png';
	$title_other02 = '労務代行サービス';
	$link_other02 =get_bloginfo('url') . '/service/assistant/';
	$service_contact = get_bloginfo('template_url') . '/images/service/service_concact02.png';
	$link_other03 = get_bloginfo('url') . '/service/consultation/';
}
?>


<style>
	#bock-sevice .down {
		padding: 40px 0 40px;
		margin-bottom: 100px;
	}
	#bock-sevice .item-other .item-img,#bock-sevice .box-contact .list-img .item-img {
		width: calc(100% / 2) !important;
	}
	#bock-sevice .item-other .item-img img,#bock-sevice .box-contact .list-img .item-img img{
		width: 100% !important;
		height: 100% !important;
		object-fit:cover !important
	}
</style>


<div id="bock-sevice">
	<div class="down">
		<div class="inner">


			<?php
			$related_posts = get_field('related_posts');
			if( $related_posts ): 
			?>
			<div class="service-seminar" data-aos="fade-up">
				<h3 class="title-home">
					<span class="text-es montserrat">RELATED SEMINAR</span><br>
					<span class="text-jp">関連するセミナー</span>
				</h3>
				<div class="list-columns flex">
					<?php 
					foreach( $related_posts as $related_post ): 

					$related_post_link = get_the_permalink($related_post->ID);
					$related_post_title = get_the_title($related_post->ID);

					if (has_post_thumbnail($related_post->ID)) {
						$related_post_thumbnail = get_the_post_thumbnail($related_post->ID, 'middle', array( 'class' => 'sizes' ));
					} else {
						$related_post_thumbnail = '<img src="'.bloginfo('template_url').'/images/common/logo01.svg" alt="" class="sizes">';
					}

					$seminar_date       = get_field( 'seminar_date' );
					$seminar_start_date = date_create( $seminar_date['seminar_start_date'], wp_timezone() );
					$seminar_close_date = date_create( $seminar_date['seminar_close_date'], wp_timezone() );
					$seminar_day_locale = gms_get_day_locale( (int) $seminar_start_date->format( 'w' ) );

					$seminar_date_apply = $seminar_start_date->format('Y年n月j日') . '(' . $seminar_day_locale . ')';
					$seminar_time_apply = $seminar_start_date->format('H:i') . '〜' . $seminar_close_date->format('H:i');

					$related_post_cats = get_the_terms($related_post->ID, 'seminar_tag' );
					ob_start();
					if ($related_post_cats){
						foreach ($related_post_cats as $cat) {
							$cat_link = get_category_link($cat->term_id);
							echo '<div class="item-tag-column"><a href="'.$cat_link.'" title="'.$cat->name.'">'.$cat->name.'</a></div>';
						}
						$cat_list = ob_get_contents();
					}

					ob_end_clean();
					?>

					<div class="item-column">
						<div class="col-content">
							<a class="item-link" href="<?= esc_html( $related_post_link ); ?>" title="<?= esc_html( $related_post_title ); ?>">
								<div class="box-img">
									<img src="<?= $related_post_thumbnail; ?>" alt="<?= esc_html( $related_post_title ); ?>">
								</div>
							</a>
							<div class="info-item">
								<p class="title"><a href="<?= esc_html( $related_post_title ); ?>"><?= esc_html( $related_post_title ); ?></a></p>
								<div class="date-time flex">
									<p class="date"><i class="fa-light fa-calendar-check"></i> <?= esc_html( $seminar_date_apply ); ?></p>
									<p class="time"><i class="fa-light fa-clock"></i> <?= esc_html( $seminar_time_apply ); ?></p>
								</div>
								<div class="list-tag-column flex">
									<?= $cat_list; ?>
								</div>
							</div>
						</div>
					</div>

					<?php endforeach; ?>
				</div>
				<div class="box-link">
					<a href="<?php bloginfo('url');?>/seminar" class="link-page">ほかのセミナーを探す</a>
				</div>
			</div>
			<?php wp_reset_postdata(); ?>
			<?php endif; ?>


			<div class="service-related" data-aos="fade-up">
				<h3 class="title-home">
					<span class="text-es montserrat">LATEST SEMINAR</span><br>
					<span class="text-jp">最新セミナー</span>
				</h3>
				<div class="list-columns flex">
					<?php
					$args = array(
						'post_type'=> 'seminar',
						'post_status' => 'publish',
						'order'    => 'DESC',
						'posts_per_page' => "3",
					);
					$result = new WP_Query( $args );
					if ( $result-> have_posts() ) :  while ( $result->have_posts() ) : $result->the_post(); ?>
					<?php
					$post_id = $post->ID;
					$post_link = get_the_permalink();
					$post_title = get_the_title();

					if (has_post_thumbnail($post_id)) {
						$post_thumbnail = get_the_post_thumbnail($post_id, 'middle', array( 'class' => 'sizes' ));
					} else {
						$post_thumbnail = '<img src="'.bloginfo('template_url').'/images/common/logo01.svg" alt="" class="sizes">';
					}

					$seminar_date       = get_field( 'seminar_date' );
					$seminar_start_date = date_create( $seminar_date['seminar_start_date'], wp_timezone() );
					$seminar_close_date = date_create( $seminar_date['seminar_close_date'], wp_timezone() );
					$seminar_day_locale = gms_get_day_locale( (int) $seminar_start_date->format( 'w' ) );

					$seminar_date_apply = $seminar_start_date->format('Y年n月j日') . '(' . $seminar_day_locale . ')';
					$seminar_time_apply = $seminar_start_date->format('H:i') . '〜' . $seminar_close_date->format('H:i');

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
					<div class="item-column">
						<div class="col-content">
							<a class="item-link" href="<?= esc_html( $post_link ); ?>" title="<?= esc_html( $post_title ); ?>">
								<div class="box-img">
									<img src="<?= $post_thumbnail; ?>" alt="<?= esc_html( $post_title ); ?>">
								</div>
							</a>
							<div class="info-item">
								<p class="title"><a href="<?= esc_html( $post_link ); ?>"><?= esc_html( $post_title ); ?></a></p>
								<div class="date-time flex">
									<p class="date"><i class="fa-light fa-calendar-check"></i> <?= esc_html( $seminar_date_apply ); ?></p>
									<p class="time"><i class="fa-light fa-clock"></i> <?= esc_html( $seminar_time_apply ); ?></p>
								</div>
								<div class="list-tag-column flex">
									<?= $cat_list; ?>
								</div>
							</div>
						</div>
					</div>
					<?php endwhile; ?>
					<?php endif;  wp_reset_postdata();
					?>
				</div>
			</div>


			<div class="page-top">
				<a href="#" class="page-top-anchor">
					<picture>
						<img src="<?php bloginfo('template_url');?>/images/common/page-top-anchor.png" alt="">
					</picture>
				</a>
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
</div>