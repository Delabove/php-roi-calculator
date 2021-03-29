<?php

/**
 * The public-facing functionality of the plugin.
 *
 * @link              http://localhost:63342/php-wordpress/wordpress%204/
 * @since             1.0.0
 * @package           Dvs_Roi_Calculator
 * @subpackage Dvs_Roi_Calculator/public
 */

/**
 * The public-facing functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the public-facing stylesheet and JavaScript.
 *
 * @package    Dvs_Roi_Calculator
 * @subpackage Dvs_Roi_Calculator/public
 * @author     DeLayne LaBove <delayne@wearetribu.com>
 */
class Dvs_Roi_Calculator_Public {

	/**
	 * The ID of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $dvs_roi_calculator     The ID of this plugin.
	 */
	private string $dvs_roi_calculator ;

	/**
	 * The version of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $version    The current version of this plugin.
	 */
	private string $version;

	/**
	 * Initialize the class and set its properties.
	 *
	 * @since    1.0.0
	 * @param      string    $dvs_roi_calculator        The name of the plugin.
	 * @param      string    $version    The version of this plugin.
	 */
	public function __construct(string $dvs_roi_calculator , string $version ) {

		$this->dvs_roi_calculator  = $dvs_roi_calculator ;
		$this->version = $version;

	}

	/**
	 * Register the stylesheets for the public-facing side of the site.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_styles() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Plugin_Name_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Plugin_Name_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_style( $this->dvs_roi_calculator, plugin_dir_url( __FILE__ ) . 'css/dvs-roi-calculator-public.css', array(), $this->version, 'all' );

	}

	/**
	 * Register the JavaScript for the public-facing side of the site.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_scripts() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Plugin_Name_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Plugin_Name_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_script( $this->dvs_roi_calculator, plugin_dir_url( __FILE__ ) . 'js/dvs-roi-calculator-public.js', array( 'jquery' ), $this->version, false );

	}

	//

	/**
	 * Plugin shortcode
	 *
	 * @since    1.0.0
	 */
	public function public_shortcode_output(){
		echo ('Hello World!');
	}

}
