<?php get_header(); ?>
		<div class="container">
		<div class="row">
			<div class="col-lg-8">
				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				<h1><?php the_title(); ?></h1>
				<p><em><?php the_time('1, F, Y')?></em></p>
	  			<?php the_content(); ?>
				<hr>
				<div class="well">
					<?php comments_template(); ?>	
				</div>

				<?php endwhile; else: ?>
				<p><?php _e('Beklager denne siden finnes ikke'); ?></p>
				<?php endif; ?>
			</div><!-- /.col-lg-4 -->
		</div><!-- /.row -->

<?php get_footer(); ?>
