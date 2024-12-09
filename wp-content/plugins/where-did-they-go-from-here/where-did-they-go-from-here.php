<?php
/**
 * WebberZone Followed Posts.
 *
 * Display a list of posts that are visited from the custom post.
 *
 * @package   WebberZone\WFP
 * @author    Ajay D'Souza
 * @license   GPL-2.0+
 * @link      https://webberzone.com
 * @copyright 2008-2023 Ajay D'Souza
 *
 * @wordpress-plugin
 * Plugin Name: WebberZone Followed Posts
 * Plugin URI:  https://webberzone.com/plugins/webberzone-followed-posts/
 * Description: The best way to display posts followed by users a.k.a. "Readers who viewed this page, also viewed" links
 * Version:     3.1.0
 * Author:      Ajay D'Souza
 * Author URI:  https://webberzone.com
 * License:     GPL-2.0+
 * License URI: https://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain: where-did-they-go-from-here
 * Domain Path: /languages
 * GitHub Plugin URI: https://github.com/WebberZone/where-did-they-go-from-here/
 */

namespace WebberZone\WFP;

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Plugin Version
 *
 * @since 3.0.0
 */
if ( ! defined( 'WFP_VERSION' ) ) {
	define( 'WFP_VERSION', '3.1.0' );
}

/**
 * Holds the filesystem directory path (with trailing slash) for WebberZone Followed Posts.
 *
 * @since 2.0.0
 */
if ( ! defined( 'WHEREGO_PLUGIN_FILE' ) ) {
	define( 'WHEREGO_PLUGIN_FILE', __FILE__ );
}

/**
 * Holds the filesystem directory path (with trailing slash) for WebberZone Followed Posts.
 *
 * @since 2.0.0
 */
if ( ! defined( 'WHEREGO_PLUGIN_DIR' ) ) {
	define( 'WHEREGO_PLUGIN_DIR', plugin_dir_path( WHEREGO_PLUGIN_FILE ) );
}

/**
 * Holds the filesystem directory path (with trailing slash) for WebberZone Followed Posts.
 *
 * @since 2.0.0
 */
if ( ! defined( 'WHEREGO_PLUGIN_URL' ) ) {
	define( 'WHEREGO_PLUGIN_URL', plugin_dir_url( WHEREGO_PLUGIN_FILE ) );
}

/**
 * Cache expiration time.
 *
 * @since 3.0.0
 */
if ( ! defined( 'WFP_CACHE_TIME' ) ) {
	define( 'WFP_CACHE_TIME', WEEK_IN_SECONDS );
}

// Load the autoloder.
require_once WHEREGO_PLUGIN_DIR . 'includes/autoloader.php';

/**
 * The code that runs during plugin activation.
 *
 * @since 3.1.0
 *
 * @param bool $network_wide Whether the plugin is being activated network-wide.
 */
function activate_wfp( $network_wide ) {
	\WebberZone\WFP\Admin\Activator::activation_hook( $network_wide );
}
register_activation_hook( __FILE__, __NAMESPACE__ . '\activate_wfp' );

/**
 * The main function responsible for returning the one true WebberZone Snippetz instance to functions everywhere.
 *
 * @since 3.1.0
 */
function load_wfp() {
	\WebberZone\WFP\Main::get_instance();
}
add_action( 'plugins_loaded', __NAMESPACE__ . '\load_wfp' );

/*
 *----------------------------------------------------------------------------
 * Include files
 *----------------------------------------------------------------------------
 */
require_once WHEREGO_PLUGIN_DIR . 'includes/options-api.php';
require_once WHEREGO_PLUGIN_DIR . 'includes/functions.php';

/**
 * Plugin settings.
 *
 * @since 1.6
 *
 * @var string
 */
global  $wherego_settings;
$wherego_settings = wherego_get_settings();
