<?php
get_header();
?>
	<div id="primary" class="content-area">
		<main id="main" class="site-main">
			<?php
			// Start the Loop.
			while ( have_posts() ) :
				the_post();
			endwhile;
			?>
		</main><!-- #main -->
	</div><!-- #primary -->
	<div class="content">
            <?php
                the_content();
            ?>
    </div>
	
	
<?php
get_footer();
