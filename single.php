<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Intelligentsia_Cup
 */

get_header(); ?>

<div id="container-body">
<div id="content">

	<?php get_sidebar(); ?>

	<div id="right" class="site-main" role="main">

		<div class="block">

		<?php
		while ( have_posts() ) : the_post();

			get_template_part( 'template-parts/content', get_post_format() );

			the_post_navigation();

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile; // End of the loop.
		?>

		</div><!-- #main -->
	</div><!-- #primary -->
	<div class="cleaner"></div>
</div>

<?php
get_footer();
