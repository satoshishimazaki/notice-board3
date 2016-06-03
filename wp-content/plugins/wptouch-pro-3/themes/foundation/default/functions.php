<?php 

do_action( 'wptouch_functions_start' ); 

add_filter( 'wp_title', 'foundation_set_title' );

function foundation_set_title( $title ) {
	return $title . ' ' . wptouch_get_bloginfo( 'site_title' );
}
// Backwpup for SSL
add_filter( 'https_local_ssl_verify', '__return_false' );