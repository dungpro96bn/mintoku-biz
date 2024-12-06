<?php
/**
 * WebberZone Followed Posts.
 *
 * Display a list of posts that are visited from the custom post.
 *
 * @package   WHEREGO
 * @author    Ajay D'Souza
 * @license   GPL-2.0+
 * @link      https://webberzone.com
 * @copyright 2008-2022 Ajay D'Souza
 *
 * @wordpress-plugin
 * Plugin Name: WebberZone Followed Posts
 * Plugin URI:  https://webberzone.com/plugins/webberzone-followed-posts/
 * Description: The best way to display posts followed by users a.k.a. "Readers who viewed this page, also viewed" links
 * Version:     3.0.0
 * Author:      Ajay D'Souza
 * Author URI:  https://webberzone.com
 * License:     GPL-2.0+
 * License URI: https://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain: where-did-they-go-from-here
 * Domain Path: /languages
 * GitHub Plugin URI: https://github.com/WebberZone/where-did-they-go-from-here/
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Holds the filesystem directory path (with trailing slash) for WebberZone Followed Posts.
 *
 * @since 2.0.0
 *
 * @var string Plugin Root File
 */
if ( ! defined( 'WHEREGO_PLUGIN_FILE' ) ) {
	define( 'WHEREGO_PLUGIN_FILE', __FILE__ );
}

/**
 * Holds the filesystem directory path (with trailing slash) for WebberZone Followed Posts.
 *
 * @since 2.0.0
 *
 * @var string Plugin folder path
 */
if ( ! defined( 'WHEREGO_PLUGIN_DIR' ) ) {
	define( 'WHEREGO_PLUGIN_DIR', plugin_dir_path( WHEREGO_PLUGIN_FILE ) );
}

/**
 * Holds the filesystem directory path (with trailing slash) for WebberZone Followed Posts.
 *
 * @since 2.0.0
 *
 * @var string Plugin folder URL
 */
if ( ! defined( 'WHEREGO_PLUGIN_URL' ) ) {
	define( 'WHEREGO_PLUGIN_URL', plugin_dir_url( WHEREGO_PLUGIN_FILE ) );
}

/**
 * Cache expiration time.
 *
 * @since 3.0.0
 *
 * @var int Cache time. Default is one week.
 */
if ( ! defined( 'WZP_CACHE_TIME' ) ) {
	define( 'WZP_CACHE_TIME', WEEK_IN_SECONDS );
}

/*
 *----------------------------------------------------------------------------
 * Includes
 *----------------------------------------------------------------------------
 */

require_once WHEREGO_PLUGIN_DIR . 'includes/admin/class-settings-api.php';
require_once WHEREGO_PLUGIN_DIR . 'includes/admin/class-wzfp-settings.php';
require_once WHEREGO_PLUGIN_DIR . 'includes/admin/options-api.php';
require_once WHEREGO_PLUGIN_DIR . 'includes/i18n.php';
require_once WHEREGO_PLUGIN_DIR . 'includes/activate-deactivate.php';
require_once WHEREGO_PLUGIN_DIR . 'includes/main.php';
require_once WHEREGO_PLUGIN_DIR . 'includes/public/media.php';
require_once WHEREGO_PLUGIN_DIR . 'includes/public/output-generator.php';
require_once WHEREGO_PLUGIN_DIR . 'includes/cache.php';
require_once WHEREGO_PLUGIN_DIR . 'includes/formatting.php';
require_once WHEREGO_PLUGIN_DIR . 'includes/tracker.php';
require_once WHEREGO_PLUGIN_DIR . 'includes/deprecated.php';

/*
 *----------------------------------------------------------------------------
 * Modules
 *----------------------------------------------------------------------------
 */

require_once WHEREGO_PLUGIN_DIR . 'includes/modules/shortcode.php';
require_once WHEREGO_PLUGIN_DIR . 'includes/modules/class-wherego-widget.php';


/*
 *----------------------------------------------------------------------------
 * Dashboard and Administrative Functionality
 *----------------------------------------------------------------------------
 */

if ( is_admin() || ( defined( 'WP_CLI' ) && WP_CLI ) ) {

	require_once WHEREGO_PLUGIN_DIR . 'includes/admin/admin-metabox.php';
	require_once WHEREGO_PLUGIN_DIR . 'includes/admin/admin-columns.php';

}

/**
 * Plugin settings.
 *
 * @since 1.6
 *
 * @var string
 */
global  $wherego_settings;
$wherego_settings = wherego_get_settings();


/**
 * Get Settings.
 *
 * Retrieves all plugin settings
 *
 * @since 2.1.0
 * @return array Add to All settings
 */
function wherego_get_settings() {

	$settings = get_option( 'wherego_settings' );

	/**
	 * Settings array
	 *
	 * Retrieves all plugin settings
	 *
	 * @since 2.1.0
	 * @param array $settings Settings array.
	 */
	return apply_filters( 'wherego_get_settings', $settings );
}
