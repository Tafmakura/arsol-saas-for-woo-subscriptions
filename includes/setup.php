<?php
/**
 * Setup file
 *
 * @package ArsolSaasForWooSubscriptions
 */

// Exit if accessed directly
if (!defined('ABSPATH')) {
    exit;
}

// Load functions
require_once ARSOL_PLUGIN_DIR . 'includes/functions/functions-autoloader.php';

// Load and initialize setup
require_once ARSOL_PLUGIN_DIR . 'includes/classes/class-setup.php';
\ArsolSaasForWooSubscriptions\Classes\Setup::get_instance();

/**
 * Initialize plugin
 */
function arsol_plugin_init() {
    // Load translations
    load_plugin_textdomain('arsol-saas-for-woo-subscriptions', false, dirname(plugin_basename(ARSOL_PLUGIN_DIR)) . '/languages');
}
add_action('plugins_loaded', 'arsol_plugin_init');

/**
 * Plugin activation/deactivation hooks
 */
register_activation_hook(ARSOL_PLUGIN_DIR . 'arsol-saas-for-woo-subscriptions.php', 'flush_rewrite_rules');
register_deactivation_hook(ARSOL_PLUGIN_DIR . 'arsol-saas-for-woo-subscriptions.php', 'flush_rewrite_rules');
