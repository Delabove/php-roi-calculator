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
	public function public_shortcode_output()
	{
		//get values from POST array
		if (isset($_POST['val1'])) $val1 = $_POST['val1'];
		if (isset($_POST['val2'])) $val2 = $_POST['val2'];
		if (isset($_POST['val3'])) $val3 = $_POST['val3'];
		if (isset($_POST['val4'])) $val4 = $_POST['val4'];
		if (isset($_POST['val5'])) $val5 = $_POST['val5'];
		if (isset($_POST['val6'])) $val5 = $_POST['val6'];
		$roi_multivar = 12;
//		$roi_answer = () * $roi_multivar;

		//calculate the cost

		echo (
			'

			
		<form style="display: table;" action="<?php echo get_permalink(); ?>"  method = "post">
		<table>
			<tr style="display: table-row-group; border: 0px; !important;">
			    <th><h3>Penalty Avoidance</h3></th>
			    <th ><h3>Likelihood of it occurring:</h3></th>   	
		    </tr>
		    <thead style="display: table-row; text-align: center;">
			    <td style="display: table-cell;"> <h4>Based on regulation <br> (PCI, HIPAA, Other)</h4></td>
			    <td style="display: table-cell;" ><h4>Today</h4></td>
			    <td style="display: table-cell; " > <h4>After<br> SA</h4> </td>
			    <td style="display: table-cell;" ><h4>Assessed <br> Risk</h4></td> 
			    <td style="display: table-cell;" ><h4>Assessed Risk<br> After SA</h4></td>
			    <td style="display: table-cell;" ><h4>Reduced Risk <br> Savings</h4></td>
		    </thead>
		    <tr style="display: table-row-group;">
			    <td style="display: table-cell;"> <input type = "text" name = "val1" value=""></td> <!--B4-->
				<td style="display: table-cell;">  <input type = "text" name = "val2"  size = "10" value=""></td> <!--C4-->
				<td style="display: table-cell;">  <input type = "text" name = "val3"  size = "10" value=""></td><!--D4-->
				<td style="display: table-cell;"> <input type = "text" name = "val4"  size = "10" value=""></td> <!--E4= B4*C4-->
				<td style="display: table-cell;"> <input type = "text" name = "val5"  size = "10" value=""></td> <!--F4= B4*D4-->
				<td style="display: table-cell;"> <input type = "text" name = "val6"  size = "10" value=""></td> <!--G4= E4-F4-->
			</tr>
			</table>
			<br>
				 Calculation: <br>
				<input type = "radio" name = "calc" value = "add"> Add
				<input type = "radio" name = "calc" value = "sub"> Subtract
				<input type = "radio" name = "calc" value = "mul"> Multiply
				<input type = "radio" name = "calc" value = "div"> Divide
				<hr>
				<input style="margin-right: 10px;" type = "submit" value = "Calculate">
				<input style="margin-left: 10px;" type = "reset" value = "Clear">
		
		   
		</form>'

			/*<td align="center"><input type="text" value="<?php echo round($roi_answer); ?>"></td>*/
		);


	}

}
