<?php
/**
 * Plugin Name: DS Dummy plugin
 * Plugin URI: http://wp-5.local
 * Description: The very first dummy plugin.
 * Version: 1.0
 * Author: DanhNC
 * Author URI: http://wp-5.local
 */

// Make sure we don't expose any info if called directly
if ( !function_exists( 'add_action' ) ) {
    echo 'Hi there!  I\'m just a plugin, not much I can do when called directly.';
    exit;
}

require_once('includes/ds_dummy_activation.php');
require_once('includes/ds_dummy_deactivation.php');

register_activation_hook(__FILE__, 'ds_dummy_activate');
register_deactivation_hook(__FILE__, 'ds_dummy_deactivate');

//register_uninstall_hook(__FILE__, 'ds_dummy_uninstall');





