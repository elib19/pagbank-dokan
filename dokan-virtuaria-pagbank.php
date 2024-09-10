<?php
/*
Plugin Name: Dokan Virtuaria PagBank Integration
Description: Integrates Virtuaria PagBank / PagSeguro and Virtuaria PagBank Split with Dokan.
Version: 1.0.0
Author: Seu Nome
Text Domain: dokan-virtuaria-pagbank
*/

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly
}

define( 'DOKAN_VIRTUARIA_PAGBANK_FILE', __FILE__ );
define( 'DOKAN_VIRTUARIA_PAGBANK_PATH', dirname( DOKAN_VIRTUARIA_PAGBANK_FILE ) );
define( 'DOKAN_VIRTUARIA_PAGBANK_URL', plugin_dir_url( DOKAN_VIRTUARIA_PAGBANK_FILE ) );
define( 'DOKAN_VIRTUARIA_PAGBANK_ASSETS', DOKAN_VIRTUARIA_PAGBANK_URL . 'assets/' );

require_once DOKAN_VIRTUARIA_PAGBANK_PATH . '/includes/class-pagbank-gateway.php';
require_once DOKAN_VIRTUARIA_PAGBANK_PATH . '/includes/class-pagbank-split-gateway.php';
require_once DOKAN_VIRTUARIA_PAGBANK_PATH . '/includes/class-dokan-virtuaria-pagbank-module.php';
require_once DOKAN_VIRTUARIA_PAGBANK_PATH . '/includes/admin-settings.php';
require_once DOKAN_VIRTUARIA_PAGBANK_PATH . '/includes/helper.php';

// Registro do módulo
function dokan_virtuaria_pagbank_register_module() {
    if ( class_exists( 'WeDevs\DokanPro\Modules\VirtuariaPagBank\Module' ) ) {
        $module = new WeDevs\DokanPro\Modules\VirtuariaPagBank\Module();
        WeDevs\Dokan\Modules\Module::register( $module );
    }
}
add_action( 'plugins_loaded', 'dokan_virtuaria_pagbank_register_module' );
