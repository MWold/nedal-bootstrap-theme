<?php
/*
 * Template name: Samarbeidspartnere template
 */
?>

<? get_header(); ?>
<div class="section">
<div class="container">
	<div class="row">
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			<?php $the_content = get_the_content(); ?>
			<div class="col-lg-12 text-center">
				<h2>Våre Samarbeidspartnere</h2>
				<hr>
			</div>
			<?php
			$partners = explode("\n", $the_content);
			foreach ($partners as $partner) {
				echo '<div class="col-lg-6 col-md-6 portfolio-item">';
				echo $partner;
				echo '</div>';
			}
			?>
 		<?php endwhile; else: ?>
			<p><?php _e('Beklager siden finnes ikke.'); ?></p>
		<?php endif; ?>
		
	</div>
	<div class="col-lg-12 text-center">
				<hr>
				<h2>Ønsker du å støtte Nedalsprosjektet? Ta kontakt på: <a href="mailto:post@nedalsprosjektet.no">post@nedalsprosjektet.no</a>!</h2>
			</div>
</div>
</div>

<?php get_footer(); ?>
