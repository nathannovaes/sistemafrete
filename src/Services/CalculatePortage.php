<?php

namespace App\Services;


interface CalculatePortage {

    /**
     * @return PortageResponse
     */
    public function calculate($cepOrigin, $cepDestiny, $peso, $largura, $comprimento, $altura, $codServico);

}