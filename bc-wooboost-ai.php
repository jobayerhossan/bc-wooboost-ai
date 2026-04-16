<?php
/**
 * Plugin Name: BC WooBoost AI
 * Plugin URI:  https://example.com/bc-wooboost-ai
 * Description: AI-powered WooCommerce optimization for product titles, descriptions, and credits.
 * Version:     1.0.0
 * Author:      BC
 * Text Domain: bc-wooboost-ai
 * Domain Path: /languages
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

require_once plugin_dir_path( __FILE__ ) . 'includes/class-plugin.php';

function bc_wooboost_ai_run_plugin() {
    return BC_WooBoost_AI::instance();
}

bc_wooboost_ai_run_plugin();
