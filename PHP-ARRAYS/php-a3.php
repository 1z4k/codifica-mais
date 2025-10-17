<?php

$unidadeDeMedidaTemperatura = readline("Informe qual a unidade de temperatura que deseja, C para Celcius ou F para Fahrenheit: ");
$valorTemperatura = (float) readline("Informe qual o valor da temperatura a ser convertida: ");

//coverter para maiuscula;
$unidadeDeMedidaTemperatura = strtoupper($unidadeDeMedidaTemperatura);
$resultado = 0;
$conversaoUnidade = '';

if ($unidadeDeMedidaTemperatura == 'C'){
    $resultado = ($valorTemperatura * 9/5) + 32;
    $conversaoUnidade = 'fahrenheit';
} elseif ($unidadeDeMedidaTemperatura == 'F'){
    $resultado = ($valorTemperatura - 32) * 5/9;
    $conversaoUnidade = 'Celcius';
} else {
    echo "Informe uma unidade valida.";
    exit;
}

echo "A temperatura covertida: " . $resultado . " °" . $conversaoUnidade;