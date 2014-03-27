<?php get_header(); ?>
		<div class="container">
		<div class="row">
			<div class="col-lg-8 col-md-6">
				<?php $the_query = new WP_Query( 'showposts=1' ); ?>
				<?php if ($the_query -> have_posts()) : while ($the_query -> have_posts()) : $the_query->the_post()  ?>
				<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
				<p><em><?php the_date();?></em></p>
				
				<?php the_content(); ?>
				
				<?php endwhile; else: ?>
				<p><?php _e('Beklager det finnes ingen blogposter.'); ?></p>
				<?php endif; ?>
			</div><!-- /.col-lg-4 -->
		</div><!-- /.row -->

<?php get_footer(); ?>