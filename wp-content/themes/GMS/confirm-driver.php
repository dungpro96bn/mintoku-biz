<?php
/**
 * Template Name: lpconfirmdriver
 * Template Post Type: page
 **/
?>

<?php get_header(); ?>

<link rel="stylesheet" media="all" href="<?php bloginfo('template_directory'); ?>/assets/css/driver.css"> 
<div class="page-content">
		
		<div class="content">
			<div class="contact-block">
				<div class="mw_wp_form_confirm">
					<?php echo do_shortcode('[contact-form-7 id="3982" title="lpdriverstep2"]'); ?>
				</div>
			</div>
		</div>

    </div>

    <script type="text/javascript">
			document.addEventListener( 'wpcf7mailsent', function( event ) {    
                location = '<?php echo home_url(); ?>/complete/';
            }, false ); 
         $(function(){

			$('.back_lp').click(function () {
				 location = '<?php echo home_url(); ?>/lp-driver/#lp-contact'; 
			}
        });

    </script>

<?php get_footer(); ?>




