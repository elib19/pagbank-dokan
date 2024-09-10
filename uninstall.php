<?php

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly
}

/**
 * Run on plugin uninstall
 */
function dokan_virtuaria_pagbank_uninstall() {
    // Exemplo: remover tabelas do banco de dados, opções, etc.
    // global $wpdb;
    // $table_name = $wpdb->prefix . 'example_table';
    
    // $sql = "DROP TABLE IF EXISTS $table_name;";
    // $wpdb->query( $sql );
    
    // Remover transientes
    delete_transient( '_dokan_virtuaria_pagbank_access_token' );
}
register_uninstall_hook( __FILE__, 'dokan_virtuaria_pagbank_uninstall' );
