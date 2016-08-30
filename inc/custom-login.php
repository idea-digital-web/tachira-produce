<?php 
/* Enque Stylesheet */
function my_custom_login() {
	echo '<link rel="stylesheet" type="text/css" href="' . get_bloginfo('stylesheet_directory') . '/login/custom-login.css" />';
}
add_action('login_head', 'my_custom_login');

/* Change the Login Logo URL */
function my_login_logo_url() {
	return get_bloginfo( 'url' );
}
add_filter( 'login_headerurl', 'my_login_logo_url' );

function my_login_logo_url_title() {
	return get_bloginfo( 'name' ) . ' | ' . get_bloginfo( 'description' );
}
add_filter( 'login_headertitle', 'my_login_logo_url_title' );





 ?>