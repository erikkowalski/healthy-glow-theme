<?php while (have_posts()) : the_post(); ?>
<?php get_template_part('templates/page', 'header'); ?>
<?php get_template_part('templates/content', 'page'); ?>
<div>
<?php the_field('booking')?>
</div>
<?php endwhile; ?>
