<?php
// Exit if accessed directly
if ( !defined( 'ABSPATH' ) ) exit;

include_once( get_stylesheet_directory() .'/client-dashboard.php');
include_once( get_stylesheet_directory() .'/my-document.php');
include_once( get_stylesheet_directory() .'/order-details.php');

// BEGIN ENQUEUE PARENT ACTION
// AUTO GENERATED - Do not modify or remove comment markers above or below:

if ( !function_exists( 'chld_thm_cfg_locale_css' ) ):
    function chld_thm_cfg_locale_css( $uri ){
        if ( empty( $uri ) && is_rtl() && file_exists( get_template_directory() . '/rtl.css' ) )
            $uri = get_template_directory_uri() . '/rtl.css';
        return $uri;
    }
endif;
add_filter( 'locale_stylesheet_uri', 'chld_thm_cfg_locale_css' );
         
if ( !function_exists( 'child_theme_configurator_css' ) ):
    function child_theme_configurator_css() {
        wp_enqueue_style( 'chld_thm_cfg_child', trailingslashit( get_stylesheet_directory_uri() ) . 'style.css', array( 'hello-elementor','hello-elementor','hello-elementor-theme-style' ) );
        wp_enqueue_style( 'bootstrap-css', '//cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css' );
        wp_enqueue_style( 'remix-icon', '//cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css' );
        wp_enqueue_style( 'main-css', get_stylesheet_directory_uri() . '/assets/css/style.css' );
    }
endif;
add_action( 'wp_enqueue_scripts', 'child_theme_configurator_css', 10 );

// END ENQUEUE PARENT ACTION

// Shotcode

function client_dashboard() {
	return client_dashboard_shortcode();
}
add_shortcode('client_dashboard','client_dashboard');

function my_document() {
	return my_document_shortcode();
}
add_shortcode('my_document','my_document');

function order_details() {
	return order_details_shortcode();
}
add_shortcode('order_details','order_details');
