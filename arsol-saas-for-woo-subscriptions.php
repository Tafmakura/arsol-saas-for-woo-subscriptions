<?php
/**
 * Plugin Name: Arsol SaaS for WooCommerce Subscriptions
 * Plugin URI: https://arsol.co.za
 * Description: A SaaS solution for WooCommerce Subscriptions
 * Version: 0.0.3
 * Author: Arsol
 * Author URI: https://arsol.co.za
 * Text Domain: arsol-saas-for-woo-subscriptions
 * Domain Path: /languages
 * Requires at least: 5.8
 * Requires PHP: 7.4
 * 
 * @package ArsolSaasForWooSubscriptions
 */

// Exit if accessed directly
if (!defined('ABSPATH')) {
    exit;
}

// Define plugin constants
define('ARSOL_PLUGIN_DIR', plugin_dir_path(__FILE__));
define('ARSOL_PLUGIN_URL', plugin_dir_url(__FILE__));

// Load plugin setup
require_once ARSOL_PLUGIN_DIR . 'includes/setup.php';
