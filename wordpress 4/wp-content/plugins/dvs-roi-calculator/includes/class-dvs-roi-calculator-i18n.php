<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link              http://localhost:63342/php-wordpress/wordpress%204/
 * @since             1.0.0
 * @package           Dvs_Roi_Calculator
 * @subpackage Dvs_Roi_Calculator/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    Dvs_Roi_Calculator
 * @subpackage Dvs_Roi_Calculator/includes
 * @author     DeLayne LaBove <delayne@wearetribu.com>
 */
class Dvs_Roi_Calculator_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */

	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'dvs-roi-calculator',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}
