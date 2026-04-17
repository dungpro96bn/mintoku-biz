<?php
/**
 * Plugin Name: OAI Chatbox Pro
 * Description: Realtime-style support chat box for WordPress with floating widget, chat history, admin inbox, notes, tags, assignment, export, offline form, and automation rules.
 * Version: 1.0.0
 * Author: OpenAI
 * Text Domain: oai-chatbox-pro
 */

if (!defined('ABSPATH')) {
    exit;
}

define('OAI_CHATBOX_PRO_VERSION', '1.0.0');
define('OAI_CHATBOX_PRO_FILE', __FILE__);
define('OAI_CHATBOX_PRO_PATH', plugin_dir_path(__FILE__));
define('OAI_CHATBOX_PRO_URL', plugin_dir_url(__FILE__));

require_once OAI_CHATBOX_PRO_PATH . 'includes/class-oai-chatbox-pro.php';

function oai_chatbox_pro() {
    return OAI_Chatbox_Pro::instance();
}

register_activation_hook(__FILE__, ['OAI_Chatbox_Pro', 'activate']);
register_deactivation_hook(__FILE__, ['OAI_Chatbox_Pro', 'deactivate']);

add_action('plugins_loaded', function() {
    oai_chatbox_pro();
});
