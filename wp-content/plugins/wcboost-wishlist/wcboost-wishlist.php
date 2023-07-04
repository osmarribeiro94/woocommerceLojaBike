<?php
/**
 * Plugin Name: WCBoost - Wishlist
 * Description: A WooCommerce extension that allows guests and customers to create and add products to a wishlist.
 * Plugin URI: https://wcboost.com/plugin/woocommerce-wishlist/?utm_source=wp-plugins&utm_campaign=plugin-uri&utm_medium=wp-dash
 * Author: WCBoost
 * Version: 1.0.7
 * Author URI: https://wcboost.com/?utm_source=wp-plugins&utm_campaign=author-uri&utm_medium=wp-dash
 *
 * Text Domain: wcboost-wishlist
 * Domain Path: /languages/
 *
 * Requires PHP: 7.0
 * Requires at least: 4.5
 * Tested up to: 6.2.2
 * WC requires at least: 3.0.0
 * WC tested up to: 7.8.0
 *
 * @package WCBoost
 * @category Wishlist
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

require_once plugin_dir_path( __FILE__ ) . 'includes/plugin.php';
require_once plugin_dir_path( __FILE__ ) . 'includes/install.php';

/**
 * Load and init plugin's instance
 */
function wcboost_wishlist() {
	if ( ! class_exists( 'WooCommerce' ) ) {
		return;
	}

	return \WCBoost\Wishlist\Plugin::instance();
}

add_action( 'woocommerce_loaded', 'wcboost_wishlist' );

/**
 * Install plugin on activation
 */
function wcboost_wishlist_activate() {
	// Install the plugin.
	if ( class_exists( 'WooCommerce' ) ) {
		\WCBoost\Wishlist\Install::install();
	}
}

register_activation_hook( __FILE__,  'wcboost_wishlist_activate' );
