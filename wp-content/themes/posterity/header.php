<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="mid">
 */


if ( ! defined( 'ABSPATH' ) ) {
    exit;
} // Exit if accessed directly

do_action('posterity_before_html');

?><!DOCTYPE html>
<!--[if IE 9]>    <html class="no-js lt-ie10" <?php language_attributes(); ?>> <![endif]-->
<!--[if gt IE 9]><!--> <html class="no-js" <?php language_attributes(); ?>> <!--<![endif]-->
<head>
<?php do_action('posterity_head_start'); ?>

<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width,initial-scale=1" />
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<link rel="profile" href="https://gmpg.org/xfn/11" />
<?php
    wp_head();
?>
</head>

<body id="top" <?php body_class(); posterity_schema_args('body'); ?>>
<?php
// WordPress 5.2 support
if ( function_exists( 'wp_body_open' ) ) {
    wp_body_open();
}
//WordPress < 5.2
else {
    do_action( 'wp_body_open' );
}
do_action('posterity_body_start');
?>
<a class="skip-link" href="#content">
<?php esc_html_e( 'Skip to content', 'posterity' ); ?>
</a>
<div class="whole-layout">
<?php
    posterity_page_preloader();
    posterity_page_background();
    if( ! apply_filters('posterity_only_content', false) ) {
        posterity_theme_header();
    }
    ?>
    <div id="mid" class="to-move <?php echo esc_attr( posterity_get_mid_classes() ); ?>">