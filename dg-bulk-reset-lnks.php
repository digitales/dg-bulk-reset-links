<?php
/**
 * DG Bulk Password Reset Links.
 *
 * A plugin to generate password reset links.
 * Please disable when finished reseting passwords.
 *
 * @package   Dg_Bulk_Reset_Links
 * @author    Ross Tweedie <ross.tweedie@dachisgroup.com>
 * @license   GPL-2.0+
 * @link      http://labs.dachisgroup.com
 * @copyright 2013 Dachis Group
 *
 * @wordpress-plugin
 * Plugin Name: DG Bulk Password Reset Links
 * Plugin URI:  http://labs.dachisgroup.com
 * Description: Generate password reset links
 * Version:     1.0.0
 * Author:      rtweedie
 * Author URI:  http://labs.dachisgroup.com
 * Text Domain: dg-bulk-reset-links-locale
 * License:     GPL-2.0+
 * License URI: http://www.gnu.org/licenses/gpl-2.0.txt
 * Domain Path: /lang
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

require_once( plugin_dir_path( __FILE__ ) . 'class-dg-bulk-reset-links.php' );

// Register hooks that are fired when the plugin is activated, deactivated, and uninstalled, respectively.
register_activation_hook( __FILE__, array( 'Dg_Bulk_Reset_Links', 'activate' ) );
register_deactivation_hook( __FILE__, array( 'Dg_Bulk_Reset_Links', 'deactivate' ) );

Dg_Bulk_Reset_Links::get_instance();
