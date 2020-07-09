<?php

namespace App\Services\Portage;

class PortageResponse {

    var $cepOrigin;
    var $cepDestiny;

    function __construct($cepOrigin, $cepDestiny)
    {
        $this->cepOrigin = $cepOrigin;
        $this->cepDestiny = $cepDestiny;
    }

}