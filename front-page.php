<?php while (have_posts()) : the_post(); ?>
<?php get_template_part('templates/content', 'page'); ?>
<?php endwhile; ?>
<img class="img-responsive" src="<?php bloginfo('template_directory'); ?>/dist/images/girl.jpg" alt="">
<div class="row">
<div class="prepare col-md-6">
	<h2>Preparing for your appointment</h2>
	<img class="img-responsive" src="<?php bloginfo('template_directory'); ?>/dist/images/scrub.jpg" alt="">
</div>
</div>
<div class="row">
<div class="prepare col-md-6 pull-right">
	<h2>All Skin types</h2>
	<img class="img-responsive" src="<?php bloginfo('template_directory'); ?>/dist/images/b-w.jpg" alt="">
	</div>
	</div>
