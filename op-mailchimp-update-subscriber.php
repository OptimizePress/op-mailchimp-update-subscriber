<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * Dashboard. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              http://www.optimizepress.com/
 * @since             1.0.0
 * @package           Op_mailchimp_update_Fix
 *
 * @wordpress-plugin
 * Plugin Name:       OptimizePress MailChimp update subscriber
 * Plugin URI:        http://www.optimizepress.com/
 * Description:       This plugin forces to update existing subscriber
 * Version:           1.0.0
 * Author:            OptimizePress
 * Author URI:        http://www.optimizepress.com/
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       op-mailchimp-update-fix
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
    die;
}

add_filter('op_mailchimp_update_existing_subscriber','opUpdateMailChimpSubscriber');

function opUpdateMailChimpSubscriber($data){
    return true;
}