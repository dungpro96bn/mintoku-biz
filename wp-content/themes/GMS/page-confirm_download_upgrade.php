<?php
    /*
    * Template Name: confirmDownload Upgrade
    * Template Post Type: page
    */
    $logo = get_stylesheet_directory_uri().'/images/common/cam-tech-logo.png';
    $logo_footer = get_stylesheet_directory_uri().'/images/common/cam-tech-footer.png';
	get_header('thanks',['class'=>'hide']);
?>
<main class="main">
    <section id="download" class="download_version2">
        <div class="inner">
	    <p class="header-logo">
            <a href="<?php bloginfo('url');?>">
                <picture>
                    <source id="changeMe01" srcset="<?php bloginfo('template_url');?>/images/common/cam-tech-logo.png">
                    <img class="sizes" id="changeMe" src="<?php bloginfo('template_url');?>/images/common/cam-tech-logo.png" alt="<?php bloginfo( 'name' ); ?>">
                </picture>
            </a>
        </p><!-- .header-logo -->
            <?php echo do_shortcode('[contact-form-7 id="3379" title="Confirm Download"]'); ?>
        </div>
    </section>
</main>
<?php get_footer('simple',['class'=>'footer_custom','footer_logo'=>$logo_footer]); ?>