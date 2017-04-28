<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Intelligentsia_Cup
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">


<!--[if IE]>
	<link href="../css/ie.css" rel="stylesheet" type="text/css" media="screen" />
	<![endif]-->

	<link href="<?php echo get_template_directory_uri(); ?>/css/base.css?ver=1.1" rel="stylesheet" type="text/css" media="screen" />
	<link href="<?php echo get_template_directory_uri(); ?>/css/mobile.css?ver=1.1" rel="stylesheet" type="text/css" media="screen" />
	<link href="<?php echo get_template_directory_uri(); ?>/css/lightbox.css" rel="stylesheet" type="text/css" media="screen" />
	<link href="<?php echo get_template_directory_uri(); ?>/css/featherlight.min.css" rel="stylesheet" type="text/css" media="screen" />
	<link href="<?php echo get_template_directory_uri(); ?>/css/featherlight.gallery.min.css" rel="stylesheet" type="text/css" media="screen" />
	<link href="http://fonts.googleapis.com/css?family=Open+Sans:600,400,300" rel="stylesheet" type="text/css" />
	<link href="http://fonts.googleapis.com/css?family=Open+Sans+Condensed:300" rel="stylesheet" type="text/css" />
	

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>



	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'intelligentsiacup' ); ?></a>

	
	
	
		<div id="container-header">
		
		<div id="branding"><div id="branding-inner">
			<div id="logo">
			
				<?php
				if ( is_front_page() && is_home() ) : ?>
					<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><img src="<?php echo get_template_directory_uri(); ?>/images/blue/ic-logo.png" class="logo" alt="<?php bloginfo( 'name' ); ?>" /></a></h1>
				<?php else : ?>
					<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><img src="<?php echo get_template_directory_uri(); ?>/images/blue/ic-logo.png" class="logo" alt="<?php bloginfo( 'name' ); ?>" /></a></p>
				<?php
				endif;
				?>
			</div>
			<div id="time">1</div>
			<div id="big"><img src="<?php echo get_template_directory_uri(); ?>/images/blue/until-race-day.png" alt="Until Race Day" /></div>
			<div id="ribbon"><img src="<?php echo get_template_directory_uri(); ?>/images/blue/ribbon.png" alt="Intelligentsia Cup Ribbon" /></div>
		    <div id="button" class="mobile"><div class="date">July 14-23, 2017</div> <!-- <a href="https://www.usacycling.org/register/2015-49" class="button" target="_blank">Register</a> --><span><a href="http://www.facebook.com/PrairieStateCyclingSeries"><img src="<?php echo get_template_directory_uri(); ?>/images/facebook-sm.png" alt="Follow us on Facebook!" height="34" /></a></span> <span><a href="https://twitter.com/prairiestatecyc"><img src="<?php echo get_template_directory_uri(); ?>/images/twitter-sm.png" alt="Follow us on Twitter!" height="34" /></a></span></div>
		</div>
				
		</div>
		
		
		<nav id="site-navigation" class="main-navigation" role="navigation">
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'intelligentsiacup' ); ?></button>
			<?php wp_nav_menu( array( 'theme_location' => 'menu-1', 'menu_id' => 'primary-menu' ) ); ?>
		</nav><!-- #site-navigation -->
		
		
		<nav id="navigation"><div id="navigation-inner">
		
			<ul id="nav">
		
				<li class="first register"><a href="#" target="_blank">Register</a></li>
				<li class="schedule"><a href="#">Schedule</a>
					<ul>
						<!-- <li><a href="../schedule.php">Schedule Overview</a></li>
						<li><a href="../schedule/beverly.php">July 14th: Chicago (Beverly)</a></li>
						<li><a href="../schedule/glen-ellyn.php">July 15th: Glen Ellyn</a></li>
						<li><a href="../schedule/willow-springs.php">July 16th: Willow Springs</a></li>
						<li><a href="../schedule/south-chicago.php">July 17th: South Chicago</a></li>
						<li><a href="../schedule/elgin.php">July 18th: Elgin</a></li>
						<li><a href="../schedule/west-dundee.php">July 19th: West Dundee</a></li>
						<li><a href="../schedule/niles.php">July 20th: Niles</a></li>
						<li><a href="../schedule/elmhurst.php">July 21st: Elmhurst</a></li>
						<li><a href="../schedule/lake-bluff.php">July 22nd: Lake Bluff</a></li>
						<li><a href="../schedule/chicago.php">July 23rd: Chicago (Fulton St.)</a></li>
						<li><a href="../schedule.php">Schedule Overview</a></li> -->
						<li><a href="#">July 14th: Chicago (Beverly)</a></li>
						<li><a href="#">July 15th: Glen Ellyn</a></li>
						<li><a href="#">July 16th: Willow Springs</a></li>
						<li><a href="#">July 17th: South Chicago</a></li>
						<li><a href="#">July 18th: Elgin</a></li>
						<li><a href="#">July 19th: West Dundee</a></li>
						<li><a href="#">July 20th: Niles</a></li>
						<li><a href="#">July 21st: Elmhurst</a></li>
						<li><a href="#">July 22nd: Lake Bluff</a></li>
						<li><a href="#">July 23rd: Chicago (Fulton St.)</a></li>
					</ul>
				</li>
				<li class="racers housing"><a href="#">Racers</a>
					<ul>
						<li><a href="/racers.php">Information</a></li>
						<li><a href="#">Housing</a>
							<ul>
								<li><a href="/housing/host-housing.php">Host Housing Overview</a></li>
								<li><a href="/housing/faq-riders.php">Host Housing for Riders</a></li>
								<li><a href="/housing/faq-hosts.php">Host Housing for Hosts</a></li>
								<li><a href="/housing/college-housing.php">Trinity University Housing</a></li>
								<li><a href="/housing/host-hotels.php">Host Hotels</a></li>
							</ul>						
						</li>
					</ul>
				</li>
				<li class="sponsors"><a href="/sponsors.php">Sponsors</a></li>
				<li class="volunteer"><a href="/volunteer.php">Volunteer</a></li>
				<li class="photos videos reports news"><a href="#">Media</a>
					<ul>
						<li><a href="/live.php">Live</a></li>
						<li><a href="/photos.php">Photos</a>
							<ul>
								<li><a href="/photos/photos-2014.php">2014 Photos</a></li>
								<li><a href="/photos/photos-2015.php">2015 Photos</a></li>
								<li><a href="/photos.php">2016 Photos</a></li>
							</ul>						
						</li>
						<li><a href="/videos.php">Videos</a></li>
						<li><a href="/reports/archive.php">Race Reports</a></li>
						<li><a href="/news/archive.php">News Archive</a></li>
					</ul>
				</li>
				<li class="results"><a href="/results.php">Results</a>
					<ul>
						<li><a href="/results.php#2016">2016 Results</a></li>
						<li><a href="/results.php#2015">2015 Results</a></li>
						<li><a href="/results.php#2014">2014 Results</a></li>
						<li><a href="/results.php#2013">2013 Results</a></li>
					</ul>
				</li>
				<li class="contact"><a href="/contact.php">Contact</a></li>

			</ul>

		</div></nav>
		
		<div id="hero"><div id="hero-inner">
			<img class="header-image" src="<?php echo get_template_directory_uri(); ?>/images/blue/header-image.png" alt="Intelligentsia Cup: July 14th-23rd, 2017" width="864" />
			<!-- <span id="register-button"><a href="https://www.usacycling.org/register/2016-64" target="_blank">Online Registration Open Now!</a></span>
			<span id="register-button"><a href="/live.php" target="_blank">Watch the replay of our Livestream!</a></span> -->
			<span id="register-button"><a href="#" target="_blank">Get Ready to Race July 14th-23rd!</a></span>
			<!-- <span id="register-button"><a href="http://www.prairiestatecyclingseries.com">Online Registration Opening Soon!</a></span> -->
			<!-- <span id="ncc"><a href="http://www.usacycling.org/ncc" target="_blank"><img src="/images/USACycling-logo.png" width="71" border="0" title="Part of USA Cycling Professional Road Tour" alt="Part of USA Cycling Professional Road Tour" /></a></span> -->
		</div></div>
		
		<div class="cleaner"></div>
		
	</div>
