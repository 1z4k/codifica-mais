<?php

$largura = (float) readline("Digite a largura do retângulo em metros: ");
$altura = (float)readline("Digite a altura do retângulo: ");

$areaRetangulo = $largura * $altura;

$PerimetroRetangulo = 2 * ($largura + $altura);

echo "O Retângulo tem:" . PHP_EOL;
echo "Área: " . $areaRetangulo . " m²" . PHP_EOL;
echo "Perímetro: " . $PerimetroRetangulo . " metros ";