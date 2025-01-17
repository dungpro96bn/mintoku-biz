<?php get_header();?>
<div id="content">
	<div class="wrap">	
		<div id="main">
			<h1 class="post-title"><?php the_archive_title();?></h1>
			<div class="content-page">
				<div class="wrap">					
					<?php
					$paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;				
					$category_id = get_cat_ID(single_cat_title('', false));
					$args = array(
						'paged' => $paged,
						'post_type' => 'post',
						'cat' => $category_id,
						'orderby' => 'date',
						'order' => 'DESC',
						'paged' => $paged,
						'posts_per_page' => '10'
					);
					$list = new WP_Query($args);
					if ( $list->have_posts() ) :
					echo '<ul>';				
					while ( $list->have_posts() ) : $list->the_post();
					?>
					<li>
						<a href="<?php the_permalink(); ?>">						
							<time><?php echo get_the_date('d.m.Y'); ?></time>
							<?php if( time() - get_the_time('G') < 604800 ): ?>
							<span class="new">
							<?php else: ?>
							<span>
							<?php endif; ?>
							<?php the_title(); ?></span>
						</a>
					</li>
					<?php
					endwhile;							
					echo '</ul>';
					wp_pagenavi(array('query'=>$list));
					wp_reset_postdata();
				endif; ?>					
				</div>
			</div>
		</div><!-- /main -->
	</div><!-- /wrap -->
</div><!-- /content -->
<?php get_footer(); ?>