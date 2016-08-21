<div class="contact-page-warpper">
		<header class="hero-img">
			<img class="img-responsive" src="<?php the_field('contact_exterior_photo')?>" alt="Exterior Photo of Healthy Glow Organic Airbrush Spraytan Salon">
		</header>

	<div class="contact-wrap">
		<?php while (have_posts()) : the_post(); ?>
		<?php get_template_part('templates/page', 'header'); ?>
		<div class="contact-info">
			<div class="contact-form">
			<?php get_template_part('templates/content', 'page'); ?>
			</div>
		</div>
		<?php endwhile; ?>
	</div>
</div>
