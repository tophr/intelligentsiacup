<?php
/* Template Name: Results */

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

				endwhile; // End of the loop.
				?>

		
			 <?php 
				echo '<div id="tabs">
				 <ul class="horizontal">';
				if( have_rows('tabs') ):
				 $i = 1;
				 while ( have_rows('tabs' ) ) : the_row();
				echo '<li><a href="#tab-' . $i . '">' . get_sub_field( "tab_title" ) . '</a></li>';
				 $i++;
				 endwhile;
				echo '</ul>';
				 $i = 1;
				 while ( have_rows('tabs') ) : the_row();
				echo '<div id="tab-' . $i . '">' . get_sub_field( "tab_content" ) . '</div>';
				 $i++;
				 endwhile;
				echo '</div>';
				else :
				 // no rows found
				endif;
				?>
		
			</div>			
			
		</div>
		<div class="cleaner"></div>
	</div>

<?php
get_footer();
