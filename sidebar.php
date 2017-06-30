<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Intelligentsia_Cup
 */

//if ( !is_active_sidebar( 'sidebar-1' ) ) {
	//return;
//}
?>
<div id="left">
	<?php 
	if ( is_front_page() ) {
		dynamic_sidebar( 'sidebar-home' );
	} else {
				 
        if ( is_home() ) {
        	dynamic_sidebar( 'sidebar-1' );
    	} else if ( is_page() && $post->post_parent ) {			
			$childpages = wp_list_pages( 'sort_column=menu_order&title_li=&child_of=' . $post->post_parent . '&echo=0' );
			echo '<ul class="sidebar-nav">' . $childpages . '</ul>';   
		} else if ( is_single() ) {
			dynamic_sidebar( 'sidebar-1' );
		} else {
    		$childpages = wp_list_pages( 'sort_column=menu_order&title_li=&child_of=' . $post->ID . '&echo=0' );
			echo '<ul class="sidebar-nav">' . $childpages . '</ul>';   			
    	}    	 
		
		//dynamic_sidebar( 'sidebar-1' );
	}
	 ?>
</div>

<!-- <div class="block">
<h3>Online Registration</h3>
<ul class="side">
	<li class="first"><a href="https://www.usacycling.org/register/2016-64" target="_blank" class="button">Register Today!</a>
	</li>
</ul>

</div> -->