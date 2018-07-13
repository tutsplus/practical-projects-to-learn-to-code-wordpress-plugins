<?php
/**
* Plugin Name:   Call to Action Shortcode (Basic)
* Plugin URI:    https://tutsplus.com/
* Description:   Adds a shortcode for a call to action box, non-editable
* Version:       1.0
* Author:        Rachel McCollin
* Author URI:    http://rachelmccollin.com
*
*
*/

/*********************************************************************************
Enqueue stylesheet
*********************************************************************************/
function tutsplus_shortcode_enqueue_styles() {
	
	wp_register_style( 'shortcode_cta_css', plugins_url( 'css/style.css', __FILE__ ) );
    wp_enqueue_style( 'shortcode_cta_css' );
 
}
add_action( 'wp_enqueue_scripts', 'tutsplus_shortcode_enqueue_styles' );
 
/*********************************************************************************
Simple shortcode
*********************************************************************************/
function tutsplus_cta_simple() { 
	
	ob_start();
	?>
	
	<div class="shortcode cta">
		<a href="#">For more posts like this in your inbox every week, join our mailing list.</a>
	</div>
	
	<?php 
	return ob_get_clean();
		
}
add_shortcode( 'cta', 'tutsplus_cta_simple' );