<?php

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly
}

/**
 * Run on plugin activation
 */
function dokan_virtuaria_pagbank_activate() {
    // Exemplo: criar tabelas no banco de dados, definir opções, etc.
    // global $wpdb;
    // $table_name = $wpdb->prefix . 'example_table';
    // $charset_collate = $wpdb->get_charset_collate();
    
    // $sql = "CREATE TABLE $table_name (
    //     id mediumint(9) NOT NULL AUTO_INCREMENT,
    //     name varchar(255) NOT NULL,
    //     PRIMARY KEY  (id)
    // ) $charset_collate;";
    
    // require_once( ABSPATH . 'wp-admin/includes/upgrade.php' );
    // dbDelta( $sql );
}
register_activation_hook( __FILE__, 'dokan_virtuaria_pagbank_activate' );
