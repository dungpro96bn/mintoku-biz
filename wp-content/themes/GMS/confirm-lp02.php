<?php
/**
 * Template Name: lpconfirm02
 * Template Post Type: page
 **/
?>

<?php get_header(); ?>
<?php get_header('lp'); ?>


<div class="page-content">
		
		<div class="content">
			<div class="contact-block">
				<div class="mw_wp_form_confirm">
					<?php echo do_shortcode('[contact-form-7 id="2683" title="lponlinetrainingstep2"]'); ?>
				</div>
			</div>
		</div>

 </div>

    <script type="text/javascript">
        $(function(){
            document.addEventListener( 'wpcf7mailsent', function( event ) {    
                location = '<?php echo home_url(); ?>/completelp/';
            }, false ); 
			
				$('.back_lp').click(function () {
				location = '<?php echo home_url(); ?>/lp/online-training/#lp-contact'; 
			}
        })

    </script>


<?php get_footer(); ?>
<?php get_footer('lp'); ?>


