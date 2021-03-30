<?php


/**
 * The admin-specific functionality of the plugin.
 *
 * @link              http://localhost:63342/php-wordpress/wordpress%204/
 * @since             1.0.0
 * @package           dvs_roi_calculator
 * @subpackage Dvs_Roi_Calculator/admin/partials
 */

/**
 * The admin-specific functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the admin-specific stylesheet and JavaScript.
 *
 *  @since      1.0.0
 * @package    Dvs_Roi_Calculator
 * @subpackage Dvs_Roi_Calculator/admin/partials
 * @author     DeLayne LaBove <delayne@wearetribu.com>
 */

?>

<!-- This file should primarily consist of HTML with a little bit of PHP. -->
<form method="post" action="options.php">
    <?php
    settings_fields('plugin_custom_settings');
    do_settings_sections('plugin_custom_settings');
    ?>
    <div class="form-group">
        <label for="exampleFormControlInput1">Email address</label>
        <input type="email" name="useremail" value="<?php echo get_option( 'useremail')?>" " id="exampleFormControlInput1" placeholder="name@example.com">
    </div>
    <div class="form-group">
	    <?php $selectedoption = get_option('numbers'); ?>
        <label for="exampleFormControlSelect1">Select: </label>
        <select class="form-control" name="numbers" id="exampleFormControlSelect1">
            <option <?php if( $selectedoption == '1'){echo "selected";} ?> > 1 </option>
            <option <?php if( $selectedoption == '2'){echo "selected";} ?> >2</option>
            <option <?php if($selectedoption== '3'){echo "selected";} ?> >3</option>
            <option <?php if( $selectedoption == '4'){echo "selected";} ?> >4</option>
            <option <?php if( $selectedoption == '5'){echo "selected";} ?> >5</option>
        </select>
    </div>
    <div class="form-group">
        <label for="exampleFormControlSelect2">Example multiple select</label>
        <select multiple class="form-control" name="multiselect" id="exampleFormControlSelect2">
            <option>1</option>
            <option>2</option>
            <option>3</option>
            <option>4</option>
            <option>5</option>
        </select>
    </div>
    <div class="form-group">
        <label for="exampleFormControlTextarea1">Example textarea</label>
        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
    </div>

    <button type="submit" class="btn btn-primary mb-2">Save Settings</button>

</form>