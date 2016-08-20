<?php while (have_posts()) : the_post(); ?>
<header class="hero-img">
	<img class="img-responsive" src="<?php the_field('after_tan_image')?>" alt="Luffa Sponge">
</header>
<div class="about-wrap after">
	<?php get_template_part('templates/page', 'header'); ?>

<div class="about-info">
<?php get_template_part('templates/content', 'page'); ?>
<?php endwhile; ?>
	</div>
</div>
