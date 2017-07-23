<?php
/**
 * The header for our theme
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 * @package Intelligentsia_Cup
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">

<!--[if IE]>
	<link href="<?php echo get_template_directory_uri(); ?>/css/ie.css" rel="stylesheet" type="text/css" media="screen" />
	<![endif]-->

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>	
<div id="container-header">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'intelligentsiacup' ); ?></a>
	<div id="branding"><div id="branding-inner">
		<div id="logo">
			<?php
			if ( is_front_page() ) : ?>
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><img src="<?php echo get_template_directory_uri(); ?>/images/blue/ic-logo.png" class="logo" alt="<?php bloginfo( 'name' ); ?>" /></a></h1>
			<?php else : ?>
				<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><img src="<?php echo get_template_directory_uri(); ?>/images/blue/ic-logo.png" class="logo" alt="<?php bloginfo( 'name' ); ?>" /></a></p>
			<?php
			endif;
			?>
		</div>
		<div id="container-time">
			<div id="time">1</div>
			<div id="big"><img src="<?php echo get_template_directory_uri(); ?>/images/blue/until-race-day.png" alt="Until Race Day" /></div>
			<div id="ribbon"><img src="<?php echo get_template_directory_uri(); ?>/images/blue/ribbon.png" alt="Intelligentsia Cup Ribbon" /></div>
			<div id="button" class="mobile"><div class="date">July 14&ndash;23, 2017</div> <span><a href="http://www.facebook.com/PrairieStateCyclingSeries"><img src="<?php echo get_template_directory_uri(); ?>/images/facebook-sm.png" alt="Follow us on Facebook!" height="34" /></a></span> <span><a href="https://twitter.com/prairiestatecyc"><img src="<?php echo get_template_directory_uri(); ?>/images/twitter-sm.png" alt="Follow us on Twitter!" height="34" /></a></span></div>
		</div>
	</div>

	</div>

	
	<nav id="navigation">
		<img src="<?php echo get_template_directory_uri(); ?>/images/ic-icon.svg" class="icon-logo" alt="" />
		<span class="menu-link"><a href="#menu">Main Menu</a></span>
		<div id="navigation-inner">
							
			<?php wp_nav_menu( array( 'menu_class' => 'menudo', 'container_class' => 'menu', 'container_id' => 'nav', 'theme_location' => 'menu-1' ) ); ?>
			
		</div>
	</nav>
	
	<div class="cleaner"></div>
	
</div>
