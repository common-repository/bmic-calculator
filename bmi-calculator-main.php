<?php 

/**
* Plugin Name: BMI Calculator
* Description: This is Basic BMI Calculator.
* Version: 1.0
* Copyright: 2022
* Text Domain: bmi-calculator
*/

if (!defined('ABSPATH')) {
	exit('-1');
}
if (!defined('BMIC_PLUGIN_DIR')) {
  define('BMIC_PLUGIN_DIR',plugins_url('', __FILE__));
}

include_once('main/frontend/bmic-frontend.php');
include_once('admin/bmic-backend.php');

add_action('wp_enqueue_scripts','BMIC_load_js_and_css_front');
function BMIC_load_js_and_css_front(){
	wp_enqueue_script('jquery', false, array(), false, false);
	wp_enqueue_script('BMIC-front-js', BMIC_PLUGIN_DIR . '/admin/js/bmic-front.js', array(),'1.0.0' ,false );
	wp_enqueue_style( 'BMIC-front-css', BMIC_PLUGIN_DIR.'/admin/css/bmic-front.css', false, '1.0' );
}

add_action( 'admin_enqueue_scripts','BMIC_load_js_and_css_admin');
function BMIC_load_js_and_css_admin(){
	wp_enqueue_style( 'wp-color-picker' );
	wp_enqueue_script( 'wp-color-picker-alpha' );
  wp_register_script( 'wp-color-picker-alpha', BMIC_PLUGIN_DIR . '/admin/js/wp-color-picker-alpha.js', array( 'wp-color-picker' ), '1.0.0', true );
  wp_enqueue_style( 'BMIC-back-css', BMIC_PLUGIN_DIR.'/admin/css/bmic-backend.css', false, '1.0' );
  wp_enqueue_script('BMIC-back-js', BMIC_PLUGIN_DIR . '/admin/js/bmic-backend.js', array(),'1.0.0' ,false );
}
