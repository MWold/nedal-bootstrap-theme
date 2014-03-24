<?php get_header(); ?>

	<div class="container marketing">
		<div class="row">
			<div class="col-lg-10 col-md-8 text-center">
				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
					
				  	<?php the_content(); ?>
			
				<?php endwhile; else: ?>
					<p><?php _e('Beklager siden eksisterer ikke.'); ?></p>
				<?php endif; ?>
			</div>
		</div>
	</div>

<?php get_footer(); ?>
