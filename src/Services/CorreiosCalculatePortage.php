<?php

namespace App\Services;

use App\Services\CalculatePortage;


class CorreiosCalculatePortage implements CalculatePortage {

    public function calculate($cepOrigin, $cepDestiny, $peso, $largura, $comprimento, $altura, $codServico) {

        $maoPropria     ='n';
        $url            = "http://ws.correios.com.br/calculador/CalcPrecoPrazo.aspx?nCdServico=$codServico&sCepOrigem=$cepOrigin&sCepDestino=$cepDestiny&nVlPeso=$peso&nCdFormato=1&nVlComprimento=$comprimento&nVlAltura=$altura&nVlLargura=$largura&nVlDiametro=1&sCdMaoPropria=$maoPropria&StrRetorno=xml";
        $servicos       = simplexml_load_file($url);
        $result         = json_decode(json_encode($servicos),TRUE);


        $correios = array();

        $portageValue = $result['cServico']['Valor'];
        $deadline     = $result['cServico']['PrazoEntrega'];

        array_push($correios, $portageValue);
        array_push($correios, $deadline);

        return $correios;
    }

}