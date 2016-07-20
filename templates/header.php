<?php
// This file assumes that you have included the nav walker from https://github.com/twittem/wp-bootstrap-navwalker
// somewhere in your theme.
?>
<header class="logobanner">

	<a class="navbar-brand" href="<?= esc_url(home_url('/')); ?>"><img class="visible-md visible-lg  img-responsive " src="<?php bloginfo('template_directory'); ?>/dist/images/healthy-glow-logo-lg.png" alt="Healthy Glow Logo"></a>

</header>
<header class="banner navbar navbar-default navbar-fixed-top" role="banner">
	<div class="container-fluid">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
				<span class="sr-only"><?= __('Toggle navigation', 'sage'); ?></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="<?= esc_url(home_url('/')); ?>"><img class="hidden-md hidden-lg img-responsive " src="<?php bloginfo('template_directory'); ?>/dist/images/healthy-glow-logo-sm.png" alt="Healthy Glow Logo"></a>
		</div>

		<nav class="collapse  navbar-collapse" role="navigation">
			<?php
			if (has_nav_menu('primary_navigation')) :
			wp_nav_menu(['theme_location' => 'primary_navigation', 'walker' => new wp_bootstrap_navwalker(), 'menu_class' => 'nav navbar-nav']);
			endif;
			?>
		</nav>
	</div>
	<div class="tagline">
		<img class="img-responsive" src="<?php bloginfo('template_directory'); ?>/dist/images/tagline.png" alt="">
	</div>
</header>

