<?php

namespace WeDevs\DokanPro\Modules\VirtuariaPagBank\Admin;

class Settings {

    public function __construct() {
        add_action( 'admin_menu', array( $this, 'add_settings_page' ) );
    }

    public function add_settings_page() {
        add_menu_page(
            __( 'Virtuaria PagBank Settings', 'dokan-virtuaria-pagbank' ),
            __( 'Virtuaria PagBank', 'dokan-virtuaria-pagbank' ),
            'manage_options',
            'dokan-virtuaria-pagbank',
            array( $this, 'render_settings_page' )
        );
    }

    public function render_settings_page() {
        // Renderize o HTML da página de configurações
        ?>
        <div class="wrap">
            <h1><?php _e( 'Virtuaria PagBank Settings', 'dokan-virtuaria-pagbank' ); ?></h1>
            <form method="post" action="options.php">
                <?php
                settings_fields( 'dokan_virtuaria_pagbank_options' );
                do_settings_sections( 'dokan-virtuaria-pagbank' );
                submit_button();
                ?>
            </form>
        </div>
        <?php
    }
}
