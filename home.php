<?php get_header(); ?>
<div class="container">
	<div class="row">
		<div class="col-lg-8 col-md-6">
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			<h2>
				<a href="<?php the_permalink(); ?>"><?php the_title(); ?> </a>
			</h2>
			<p>
				<em><?php the_time('l, F jS, Y'); ?> </em>
				<?php the_excerpt(); ?>
			</p>
			<hr>


			<?php endwhile; else: ?>
			<p>
				<?php _e('Beklager, det finnes ingen poster.'); ?>
			</p>
			<?php endif; ?>
		</div>
		<!-- /.col-lg-4 -->
	</div>
	<!-- /.row -->

	<?php get_footer(); ?>