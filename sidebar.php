<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Intelligentsia_Cup
 */

if ( !is_active_sidebar( 'sidebar-1' ) ) {
	return;
}
?>
<div id="left">
	<?php 
	if ( is_front_page() ) {
		dynamic_sidebar( 'sidebar-home' );
	} else {
		dynamic_sidebar( 'sidebar-1' );
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