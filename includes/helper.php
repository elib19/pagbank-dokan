<?php

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly
}

/**
 * Verifica se o módulo está habilitado
 *
 * @return bool
 */
function dokan_virtuaria_pagbank_is_enabled() {
    // Verifique a configuração ou transientes para determinar se o módulo está habilitado
    $enabled = get_option( 'dokan_virtuaria_pagbank_enabled', false );
    return $enabled === 'yes';
}

/**
 * Obtém o token de acesso
 *
 * @return string
 */
function dokan_virtuaria_pagbank_get_access_token() {
    return get_transient( '_dokan_virtuaria_pagbank_access_token' );
}

/**
 * Define o token de acesso
 *
 * @param string $token
 */
function dokan_virtuaria_pagbank_set_access_token( $token ) {
    set_transient( '_dokan_virtuaria_pagbank_access_token', $token, 12 * HOUR_IN_SECONDS );
}
