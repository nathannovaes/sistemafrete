<?php

namespace App\Services;


interface CalculatePortage {

    /**
     * @return PortageResponse
     */
    public function calculate(string $cepOrigin, string $cepDestiny);

}