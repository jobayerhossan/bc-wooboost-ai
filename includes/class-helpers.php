<?php
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

class BC_WooBoost_AI_Helpers {
    public static function sanitize_text( $text ) {
        return sanitize_text_field( $text );
    }
}
