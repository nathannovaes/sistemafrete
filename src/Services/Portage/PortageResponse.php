<?php

namespace App\Services\Portage;

class PortageResponse {

    var $valor;
    var $prazoEntrega;

    function __construct($valor, $prazoEntrega) 
    {
        $this->valor = $valor;
        $this->prazoEntrega = $prazoEntrega;
    }

}