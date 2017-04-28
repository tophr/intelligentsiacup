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

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-info">
			
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->


<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery-1.7.2.min.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/lightbox.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/featherlight.min.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/featherlight.gallery.min.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery.countdown1.2.min.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/navigation.js"></script>
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
