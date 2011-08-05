<!DOCTYPE html>
<html lang="en">
	<head>
		<title><?php wp_title(''); ?></title>
		<meta charset="UTF-8">
		<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen">
<?php
wp_head();
?>
		<!--[if lt IE 9]>
			<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
	</head>
	<body <?php body_class(); ?>>
		<header>
			<div class="wrap">
				<h1 id="logo">
					<a href="<?php bloginfo('url'); ?>"><?php bloginfo('name'); ?></a>
				</h1>
				<nav>
<?php
wp_nav_menu(array(
	'menu' => 'mainmenu',
	'container' => false
));
?>
				</nav>
			</div><!-- end .wrap -->
		</header>
		<section class="hugeText" id="homeIntro">
			<div class="wrap">
<?php
 if(is_home()){
?>
				<p>My <span>portfolio</span> speaks for itself.</p>
<?php
} elseif(get_post_meta($post->ID, 'intro', true)) {
	echo get_post_meta($post->ID, 'intro', true);
} else {
	echo "<h2>";
		the_title();
	echo "</h2>";
}
?>
			</div>
		</section>
		<section id="contentwrapper">
			<div class="wrap">