<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Intelligentsia_Cup
 */

?>

</div>

<footer id="footer" class="site-footer" role="contentinfo">
	<div class="container">
		<div id="footer-left">
			<?php wp_nav_menu( array( 'theme_location' => 'menu-footer' ) ); ?>

			<p><strong>Phone</strong>: 847.644.0277 <strong>Email</strong>: <a href="mailto:info@intelligentsiacup.com">info@intelligentsiacup.com</a></p>
			
			<p><small>&copy; <?php echo date('Y'); ?> Prairie State Cycling Series, LLC. All rights reserved.</small></p>	
		</div>
		<div id="footer-right">
			<?php if ( !is_active_sidebar( 'sidebar-footer' ) ) {
					return;
				}			
				dynamic_sidebar( 'sidebar-footer' );			
			 ?>	
		</div>
	</div>	
</footer>

<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery-1.7.2.min.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/lightbox.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/featherlight.min.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/featherlight.gallery.min.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery.countdown1.2.min.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/navigation-ic.js"></script>
<script type="text/javascript">
jQuery(document).ready(function() {

	$("#time").countdown({
		date: "july 14, 2017 16:40",
		onChange: function( event, timer ){
		},
		//onComplete: function( event ){

			//$(this).html("No More Time");
		//},
		leadingZero: true
	});

});
</script>

<!-- Google Analytics Code -->
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-52001827-1', 'prairiestatecyclingseries.com');
  ga('send', 'pageview');
</script>

<?php wp_footer(); ?>

</body>
</html>
