<?php
//Define Dirpath for hooks
define( 'DIR_PATH', plugin_dir_path( __FILE__ ) );


/**
 * Plugin Name: ROI Calculator Restructured
 * Description:  Calculates users return on investment.
 * Version:           1.0.0
 * Author: DeLayne LaBove <delayne@wearetribu.com>
 * Author URI: https://delabove.github.io/
 * Plugin URI:  http://localhost:63342/php-wordpress/wordpress%204/
 */

if ( ! class_exists( 'RoiCalculator' ) ) {
	class RoiCalculator {
		/**
		 * The array of actions registered with WordPress.
		 *
		 * @since    1.0.0
		 * @access   protected
		 * @var      array    $actions    The actions registered with WordPress to fire when the plugin loads.
		 */
		protected array $actions;

		/**
		 * The array of filters registered with WordPress.
		 *
		 * @since    1.0.0
		 * @access   protected
		 * @var      array    $filters    The filters registered with WordPress to fire when the plugin loads.
		 */
		protected array $filters;

		/**
		 * Initialize the collections used to maintain the actions and filters.
		 *
		 * @since    1.0.0
		 */
		/**
		 * Constructor
		 */
		public function __construct() {
			$this->setup_actions();
			$this->actions = array();
			$this->filters = array();
			$this->shortcodes = array();
		}

		/**
		 * Setting up Hooks
		 */
		public function setup_actions() {
			//Main plugin hooks
			register_activation_hook( DIR_PATH, array( 'RoiCalculator', 'activate' ) );
			register_deactivation_hook( DIR_PATH, array( 'RoiCalculator', 'deactivate' ) );
		}

		/**
		 * Activate callback
		 */
		public static function activate() {
			//Activation code in here
		}

		/**
		 * Deactivate callback
		 */
		public static function deactivate() {
			//Deactivation code in here
		}

	}


	// instantiate the plugin class
	$wp_plugin_template = new RoiCalculator();
}