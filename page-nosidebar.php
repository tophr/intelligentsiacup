<?php
/* Template Name: No Sidebar Template */

get_header(); ?>

<?php
if ( has_post_thumbnail() ) { ?>
	<div id="hero" style="background-image: url('<?php the_post_thumbnail_url(); ?>');">
		<div id="hero-inner">
			<?php the_title( '<h1 id="hero-headline">', '</h1>' ); ?>
		</div>
	</div>
<?php	
} 
?>

<div id="container-body">
	<div id="content">

		<div id="right" class="full-width">
			<div class="block">

				<?php
				while ( have_posts() ) : the_post();

					get_template_part( 'template-parts/content', 'page' );

					// If comments are open or we have at least one comment, load up the comment template.
					if ( comments_open() || get_comments_number() ) :
						comments_template();
					endif;

				endwhile; // End of the loop.
				?>

			</div>
			
			<?php
			if( have_rows('content_sections') ):					
								
				while ( have_rows('content_sections') ) : the_row();		
					$title = get_sub_field('title');
					$body = get_sub_field('body');
			
					echo '<div class="block">';			
					echo '<h1 class="entry-title title">' . $title . '</h1>';	
			
					echo $body;	
					echo '</div>';				
			
				endwhile;
				
			endif;
			?>			
			
		</div>
		<div class="cleaner"></div>
	</div>

<?php
get_footer();
