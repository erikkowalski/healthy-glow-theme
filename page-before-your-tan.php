<?php while (have_posts()) : the_post(); ?>
<header class="hero-img">
	<img class="img-responsive" src="<?php the_field('before_tan_image')?>" alt="Luffa Sponge">
</header>
<?php get_template_part('templates/page', 'header'); ?>
<?php get_template_part('templates/content', 'page'); ?>
<?php endwhile; ?>
