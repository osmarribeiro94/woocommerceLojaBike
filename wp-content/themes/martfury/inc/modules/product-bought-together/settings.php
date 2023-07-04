<?php

namespace Martfury\Modules\Product_Bought_Together;

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

/**
 * Main class of plugin for admin
 */
class Settings  {

	/**
	 * Instance
	 *
	 * @var $instance
	 */
	private static $instance;


	/**
	 * Initiator
	 *
	 * @since 1.0.0
	 * @return object
	 */
	public static function instance() {
		if ( ! isset( self::$instance ) ) {
			self::$instance = new self();
		}

		return self::$instance;
	}

	/**
	 * Instantiate the object.
	 *
	 * @since 1.0.0
	 *
	 * @return void
	 */
	public function __construct() {
		add_filter( 'woocommerce_get_sections_products', array( $this, 'product_bought_together_section' ), 30, 2 );
		add_filter( 'woocommerce_get_settings_products', array( $this, 'product_bought_together_settings' ), 30, 2 );
	}

	/**
	 * Free Shipping Bar section
	 *
	 * @since 1.0.0
	 *
	 * @return array
	 */
	public function product_bought_together_section( $sections ) {
		$sections['martfury_product_bought_together'] = esc_html__( 'Product Bought Together', 'martfury' );

		return $sections;
	}

	/**
	 * Adds settings to product display settings
	 *
	 * @since 1.0.0
	 *
	 * @param array $settings
	 * @param string $section
	 *
	 * @return array
	 */
	public function product_bought_together_settings( $settings, $section ) {
		if ( 'martfury_product_bought_together' == $section ) {
			$settings = array();

			$settings[] = array(
				'id'    => 'martfury_product_bought_together_options',
				'title' => esc_html__( 'Product Bought Together', 'martfury' ),
				'type'  => 'title',
			);

			$settings[] = array(
				'id'      => 'martfury_product_bought_together',
				'title'   => esc_html__( 'Product Bought Together', 'martfury' ),
				'desc'    => esc_html__( 'Enable', 'martfury' ),
				'type'    => 'checkbox',
				'default' => 'yes',
			);

			$settings[] = array(
				'id'   => 'martfury_product_bought_together_options',
				'type' => 'sectionend',
			);
		}

		return $settings;
	}

}