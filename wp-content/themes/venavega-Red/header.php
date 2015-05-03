<?php
/**
 * The Header template for our theme
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Venavega
 * 
 */
?><!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) & !(IE 8)]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<title><?php wp_title( '|', true, 'right' ); ?></title>
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<!--[if lt IE 9]>
	<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js"></script>
	<![endif]-->
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/css/bootstrap.min.css">
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:300' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Martel+Sans:200' rel='stylesheet' type='text/css'>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<div id="page" class="hfeed site">
		<header id="masthead" class="site-header" role="banner">
			<div class="top">
				<img src="<?php bloginfo('stylesheet_directory'); ?>/images/headers/gob21.jpg" id="left" alt="" />
				<img src="<?php bloginfo('stylesheet_directory'); ?>/images/headers/banner_right.jpg" id="right" alt="">
			</div>
			<div style="position:relative;text-align: center;">
				<a id="logo" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
					<img src="<?php bloginfo('stylesheet_directory'); ?>/images/headers/logo.png" alt="Logo" />
				</a>
				<div class="ColorsLogo" style="background:#e3e7f2;"></div>
				<div class="ColorsLogo" style="background:#a8bdd8;"></div>
			</div>
			<div id="navbar" class="navbar">
				<nav id="site-navigation" class="navigation main-navigation dark-red" role="navigation">
					<button class="menu-toggle"><?php _e( 'Menu', 'twentythirteen' ); ?></button>
					<a class="screen-reader-text skip-link" href="#content" title="<?php esc_attr_e( 'Skip to content', 'twentythirteen' ); ?>"><?php _e( 'Skip to content', 'twentythirteen' ); ?></a>
					<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => 'nav-menu', 'menu_id' => 'primary-menu' ) ); ?>
					
				</nav><!-- #site-navigation -->
				<div class="line-dark-yellow"></div>
			</div><!-- #navbar -->
		</header><!-- #masthead -->
		
		<?php if (is_front_page()) { ?>
			<div style="position:relative">
	        	<?php echo do_shortcode("[metaslider id=37]");?>
	        	<div id="CaptionSlider">
	        		<p id="mainText">Servicios de Carga Marítimo</p>
	        		<p>Nacional e Intenacional</p>
	        	</div> 
        	</div>
    	<?php } ?>
		<div id="main" class="site-main">
