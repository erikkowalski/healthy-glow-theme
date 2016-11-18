<?php while (have_posts()) : the_post(); ?>
<?php get_template_part('templates/content', 'page'); ?>
<?php endwhile; ?>


<!-- Carousel
================================================== -->
<div id="myCarousel" class="carousel slide" data-ride="carousel">
	<!-- Indicators -->
	<ol class="carousel-indicators">
		<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
		<li data-target="#myCarousel" data-slide-to="1"></li>
		<li data-target="#myCarousel" data-slide-to="2"></li>

	</ol>
	<div class="carousel-inner" role="listbox">



		<div class="item slide-one active">

			<img class="img-responsive"  src="<?php the_field('hero_one'); ?>" alt="First slide">
		</div>

		<div class="item">

			<img  class="img-responsive"  src="<?php the_field('hero_two'); ?>" alt="Second slide">
		</div>

		<div class="item">

			<img class="img-responsive"  src="<?php the_field('hero_three'); ?>" alt="Third slide">
		</div>
	</div>

	<a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
		<span class="glyphicon glyphicon-chevron-left"></span>
		<span class="sr-only">Previous</span>
	</a>
	<a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
		<span class="glyphicon glyphicon-chevron-right"></span>
		<span class="sr-only">Next</span>
	</a>
</div><!-- /.carousel -->
<hr>
<!--
<div class="row">
<div class="prepare col-md-6">
	<h2>Preparing for your appointment</h2>
	<img class="img-responsive" src="<?php // bloginfo('template_directory'); ?>/dist/images/scrub.jpg" alt="">
</div>
</div>
<div class="row">
<div class="prepare col-md-6 pull-right">
	<h2>All Skin types</h2>
	<img class="img-responsive" src="<?php // bloginfo('template_directory'); ?>/dist/images/b-w.jpg" alt="">
	</div>
	</div>
--!>
