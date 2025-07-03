<?php
/*
    * Template Name: Complete all contact
    * Template Post Type: page
    */
get_header(); 
?>

<?php
$path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$segments = array_filter(explode('/', $path));
$last_segment = end($segments);

echo $last_segment;
?>

<div id="contact-form">

	<?php if($last_segment == "complete_seminar"): ?>
	<div class="banner-page">
		<div class="banner-main">
			<div class="inner">
				<div class="heading-banner">
					<h1>セミナー情報</h1>
				</div>
			</div>
		</div>
	</div>
	<?php else: ?>
	<div class="banner-page">
		<div class="banner-main">
			<div class="inner">
				<div class="heading-banner">
					<h1>お問い合わせ</h1>
				</div>
			</div>
		</div>
	</div>
	<?php endif; ?>


	<div class="complete-main">
		<div class="inner">
			<h3 class="title">送信完了しました</h3>
			<p class="text">お申し込み・お問い合わせありがとうございます。<br/>後日に担当者が確認の上、ご連絡いたしますので、恐れ入りますがしばらくお待ちください。</p>
		</div>
	</div>

	<?php get_template_part("template-parts/banner-other"); ?>

	<?php get_template_part("template-parts/support"); ?>

	<?php get_template_part("template-parts/line-up"); ?>

	<?php get_template_part("template-parts/contact-bottom"); ?>

</div>

<?php get_footer(); ?>