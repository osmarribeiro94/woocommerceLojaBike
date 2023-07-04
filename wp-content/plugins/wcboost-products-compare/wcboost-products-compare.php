<?php
/**
 * Plugin Name: WCBoost - Products Compare
 * Description: A WooCommerce extension that allows guests and customers compare products easily.
 * Plugin URI: https://wcboost.com/plugin/woocommerce-products-compare/?utm_source=wp-plugins&utm_campaign=plugin-uri&utm_medium=wp-dash
 * Author: WCBoost
 * Version: 1.0.1
 * Author URI: https://wcboost.com/?utm_source=wp-plugins&utm_campaign=author-uri&utm_medium=wp-dash
 *
 * Text Domain: wcboost-products-compare
 * Domain Path: /languages/
 *
 * Requires PHP: 7.0
 * Requires at least: 4.5
 * Tested up to: 6.2.2
 * WC requires at least: 3.0.0
 * WC tested up to: 7.8.0
 *
 * @package WCBoost
 * @category Products Compare
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

require_once plugin_dir_path( __FILE__ ) . 'includes/plugin.php';
require_once plugin_dir_path( __FILE__ ) . 'includes/install.php';

/**
 * Load and init plugin's instance
 */
function wcboost_products_compare() {
	if ( ! class_exists( 'WooCommerce' ) ) {
		return;
	}

	return \WCBoost\ProductsCompare\Plugin::instance();
}

add_action( 'woocommerce_loaded', 'wcboost_products_compare' );

/**
 * Install plugin on activation
 */
function wcboost_products_compare_activate() {
	// Install the plugin if WooCommerce is installed.
	if ( class_exists( 'WooCommerce' ) ) {
		\WCBoost\ProductsCompare\Install::install();
	}
}

register_activation_hook( __FILE__,  'wcboost_products_compare_activate' );
