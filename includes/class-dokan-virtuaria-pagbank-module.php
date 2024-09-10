<?php

namespace WeDevs\DokanPro\Modules\VirtuariaPagBank;

use WeDevs\Dokan\Traits\ChainableContainer;
use WeDevs\Dokan\Modules\Module as DokanModule;

class Module extends DokanModule {

    use ChainableContainer;

    public function __construct() {
        $this->id   = 'virtuaria_pagbank';
        $this->name = __( 'Virtuaria PagBank Integration', 'dokan-virtuaria-pagbank' );
        
        parent::__construct();
    }

    public function init() {
        // Inicializa o módulo
    }

    public function activate( $instance ) {
        parent::activate( $instance );
        // Ativar funcionalidades específicas do módulo
    }

    public function deactivate( $instance ) {
        parent::deactivate( $instance );
        // Desativar funcionalidades específicas do módulo
    }

    public function get_settings() {
        // Retorna as configurações do módulo
        return array();
    }
}
