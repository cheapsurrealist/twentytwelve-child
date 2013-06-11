<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */
?><!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width" />
	<title><?php wp_title( '|', true, 'right' ); ?></title>
	<link rel="profile" href="http://gmpg.org/xfn/11" />
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
	<script type="text/javascript" src="//use.typekit.net/jga1vmo.js"></script>
	<script type="text/javascript">try{Typekit.load();}catch(e){}</script>
	<?php // Loads HTML5 JavaScript file to add support for HTML5 elements in older IE versions. ?>
	<!--[if lt IE 9]>
	<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
	<![endif]-->
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

	<div class="pre-page-header">
		<div class="pre-page-header-container">
			<div class="alignleft-plus">
				<a href="#content">Skip to Content</a> 
			</div>
			<div class="alignright-plus">
				<a href="/contact/">Contact</a> | <a href="/sitemap/">Sitemap</a>
			</div>
		</div>
	</div>

	<div id="page" class="hfeed site">

		<header id="masthead" class="site-header" role="banner">

			<div class="header-search">
				<form method="get" id="searchform" action="/" role="search">
					<label for="search" class="search-label">Search</label>
					<input type="text" class="field" name="s" id="search" placeholder="enter keywords" />
					<input type="submit" class="submit" name="submit" id="searchsubmit" value="Go" />
				</form>
			</div>

			<a href="<?php echo get_home_url( 1 ); ?>">
				<img src="<?php echo get_stylesheet_directory_uri() . '/dredf-logo.png'; ?>"
					class="header-image" width="200" height="100" alt="DREDF" />
			</a>
			<h1 class="site-title"><?php bloginfo( 'name' ); ?></h1>
			<h2 class="site-description"><?php bloginfo( 'description' ); ?></h2>

			<nav id="site-navigation" class="main-navigation" role="navigation" aria-label="Main menu">
				<?php wp_nav_menu( array(
					'theme_location' => 'primary',
					'menu_class' => 'nav-menu',
				) ); ?>
			</nav><!-- #site-navigation -->

		</header><!-- #masthead -->

		<nav class="breadcrumbs" role="navigation">
			<?php if ( function_exists( 'bcn_display' ) ) { bcn_display(); } ?>
		</nav>

		<main id="main" class="wrapper" role="main">
