<?php get_header(); ?>

<?php
if ( has_post_thumbnail() ) { ?>
<div id="hero" style="background-image: url('<?php the_post_thumbnail_url(); ?>');">
	<div id="hero-inner">		
		<?php if ( get_field('hero_headline')) {
			$headline = get_field('hero_headline');
			$link = get_field('hero_link');
			echo '<span id="register-button"><a href="' . $link . '" target="_blank">' . $headline . '</a></span>';
		} ?>		
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