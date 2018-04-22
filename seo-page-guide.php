<?php
/*
Plugin Name:  SEO Page Guide
Plugin URI:   
Description:  This plugin is designed to help website owners see the SEO content added on the back end of the site in the Yoast Plugin without having to go to the back end of the page/site. It will only show on the front end when the user is logged in. Designed by Tara Claeys. Developed by Shayna Diamond.
Version:      0.1
Author:       ShaynaLD
Author URI:   
License:      GPL2
License URI:  https://www.gnu.org/licenses/gpl-2.0.html
Text Domain:  seopg
Domain Path:  /languages
*/


/* Register  styles*/
function add_seopg_files(){
	wp_enqueue_style('seopg', get_stylesheeet_uri() );
}
add_action( 'wp_enqueue_sctipts', 'add_seopg_files' );


/*  */
$current_user = wp_get_current_user();
if (user_can( $current_user, 'administrator' )) {
  // user is an admin
  ?>
<div id="seopg-container">THIS IS IT!</div>

<?php }