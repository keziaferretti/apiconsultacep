<?php

use App\WebService\ViaCep;

require __DIR__ . '/vendor/autoload.php';

//verifica a existencia do cep no comando

if(!isset($argv[1])){
    die("Cep não definido\n");
}

//execulta a consulta de cep
$dadosCEP = ViaCep::consultarCep($argv[1]);

print_r($dadosCEP);