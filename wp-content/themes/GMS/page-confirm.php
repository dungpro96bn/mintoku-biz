<?php
	get_header('thanks');
?>
<main class="main">		
	<div class="pageTitle complete-home">
	<a href="<?php bloginfo('url');?>" class="logo-thaks">
		<picture class="box-img">
			<source srcset="<?php bloginfo('template_url');?>/images/common/logo_confirm.svg">
			<img class="sizes"	src="<?php bloginfo('template_url');?>/images/common/logo_confirm.svg" alt="">
		</picture>
	</a>
		<h2><span class="en montserrat">CONFIRMATION</span>入力確認</h2>
	</div>
	<section id ="confirm">
		<div class="block-form">
			<div class="inner">
				<div class="home-form">
					<?php 						
						echo do_shortcode('[contact-form-7 id="2216" title="お問い合わせフォーム Step 2"]');	
					?>
				</div>				
			</div>
		</div>						  
	</section>   
</main>
<?php get_footer('simple'); ?>
