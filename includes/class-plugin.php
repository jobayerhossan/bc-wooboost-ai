<?php
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

class BC_WooBoost_AI {
    protected static $instance = null;

    public static function instance() {
        if ( null === self::$instance ) {
            self::$instance = new self();
            self::$instance->setup();
        }

        return self::$instance;
    }

    protected function setup() {
        add_action( 'plugins_loaded', array( $this, 'load_textdomain' ) );
    }

    public function load_textdomain() {
        load_plugin_textdomain( 'bc-wooboost-ai', false, basename( dirname( __FILE__ ) ) . '/../languages' );
    }
}
