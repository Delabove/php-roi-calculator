<?php
/*
Plugin Name: DVS ROI Calculator

Plugin URI: http://localhost:63342/php-wordpress/wordpress%204/

Description: Plugin to calculate partner roi
Version: 1.0
Author: DeLayne LaBove
Author URI: https://delabove.github.io/
License: GPLv2 or later
Text Domain: roi-calculator

*/

if (! defined('ABSPATH') ){
	exit; /* if the absolute path to wordpress is not defined, don't run any code */
}

/* define variable for path to the file to find assets such as scripts or styles easier */
define('ROI_CALC_LOCATION', dirname( __FILE__ ) );
define('ROI_CALC_LOCATION_URL', plugins_url('', __FILE__ ) );


/*Function to register form widget with wordpress*/
function roi_calc_register_form_widget(){
	/*register the new widget called roi calc form widget*/
	register_widget('ROI_CALC_FORM_WIDGET'); /*name of class*/
}
/*the function is hooked into the widget in its action*/
add_action('widgets_init', 'roi_calc_register_form_widget');

/*roi form widget class class that extends wordpress widget class*/
class ROI_CALC_FORM_WIDGET extends WP_Widget {
	/*1. CREATE SETUP FOR THE WIDGET*/
	public function __construct( ) {
		/*widget settings*/
		$widget_ops=array(
			'classname' => 'roi_calc_form',
			'description' => __('Output the ROI Calculator Form' , 'roi_calc_register_form_widget'),
		);
		/*widget control settings*/
		$control_ops = array(
			'id_base' => 'roi_calc_form',
		);

		parent::__construct('roi_calc_form', 'ROI Calculator Form', $widget_ops, $control_ops);
	}

	/*output widgets front end*/
	public function widget( $args, $instance ) {
		/*outputs the content before the widget*/
		echo wp_kses_post($args['before_widget']); /*outputs $shared_args from twenty_twenty_sidebar_registration */

		/**
		 * Call an action to output the widget
		 *
		 * @param string $args  is an array of the widget arguments ex: 'before_widget
		 * @param string $instance    is an array  of the widget instances
		 * @hooked roi_output_calc_form_widget_content -20
		 * @hooked roi_calc_form_widget_title. -10
		 */



		do_action('roi_calc_form_output', $args, $instance );

		echo wp_kses_post($args['after_widget']); /*outputs $shared_args from twenty_twenty_sidebar_registration */
	}

	/*Form function that controls the form*/
	public function form( $instance ) {

		$title = ! empty($instance ['title'] ) ? $instance['title'] : '';
		?>
	<p>
		<label for="<?php echo esc_attr($this->get_field_id('title') ); ?>" name="<?php echo esc_attr($this->get_field_name('title') ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>"></label>

	</p>

<?php
	}


}