<?php get_header(); ?>

<?php
if ( has_post_thumbnail() ) { ?>
<div id="hero" style="background-image: url('<?php the_post_thumbnail_url(); ?>');">
	<div id="hero-inner">
		<!-- <span id="register-button"><a href="https://www.usacycling.org/register/2016-64" target="_blank">Online Registration Open Now!</a></span>
				<span id="register-button"><a href="/live.php" target="_blank">Watch the replay of our Livestream!</a></span> -->
		<span id="register-button"><a href="#" target="_blank">Get Ready to Race July 14th&ndash;23rd!</a></span>
		<!-- <span id="register-button"><a href="http://www.prairiestatecyclingseries.com">Online Registration Opening Soon!</a></span> -->
		<!-- <span id="ncc"><a href="http://www.usacycling.org/ncc" target="_blank"><img src="/images/USACycling-logo.png" width="71" border="0" title="Part of USA Cycling Professional Road Tour" alt="Part of USA Cycling Professional Road Tour" /></a></span> -->
	</div>
</div>
<?php	
} 
?>

<div id="container-body">
	<div id="content">

		<?php get_sidebar(); ?>

		<div id="right">

			<div class="block">

				<?php
				if ( have_posts() ):

				/* Start the Loop */
				while ( have_posts() ): the_post();

				the_title( '<div class="title">', '</div>' );

				the_content();

				endwhile;

				endif;
				?>

				<?php
				$latest_blog_posts = new WP_Query( array( 'posts_per_page' => 5 ) );

				if ( $latest_blog_posts->have_posts() ) : while ( $latest_blog_posts->have_posts() ) : $latest_blog_posts->the_post();

					get_template_part( 'template-parts/content', get_post_format() );

				endwhile;

				the_posts_navigation();

				endif;
				?>

			</div>

		</div>

		<div class="cleaner"></div>

	</div>

<?php
get_footer();