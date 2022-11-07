<?php
/**
 * Template used for displaying password protected page.
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
} // Exit if accessed directly


global $posterity_a13;


//custom template
if($posterity_a13->get_option( 'page_password_template_type' ) === 'custom' ){
	$_page = $posterity_a13->get_option( 'page_password_template' );

	define('POSTERITY_CUSTOM_PASSWORD_PROTECTED', true );

	//make query
	$query = new WP_Query( array('page_id' => $_page ) );

	//add password form to content
	add_filter( 'the_content', 'posterity_add_password_form_to_template' );

	//show
	posterity_page_like_content($query);

	// Reset Post Data
	wp_reset_postdata();

	return;
}

//default template
else{
	define('POSTERITY_PASSWORD_PROTECTED', true); //to get proper class in body

	$_title = '<span class="fa fa-lock emblem"></span>' . esc_html__( 'This content is password protected.', 'posterity' )
	         .'<br />'
	         .esc_html__( 'To view it please enter your password below', 'posterity' );

	get_header();

	posterity_title_bar( 'outside', $_title );

	echo posterity_password_form(); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped

	get_footer();
}