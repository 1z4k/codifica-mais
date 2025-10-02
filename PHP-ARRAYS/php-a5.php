<?php


$valorPeso = (float) readline("Qual o seu peso (em kg): ");
$valorAltura = (float) readline("Qual a sua Altura (em metros): ");

$imc = $valorPeso / ($valorAltura * $valorAltura);


$classificacao = '';

if ($imc < 18.5) {
    $classificacao = "Magreza";

} elseif ($imc >= 18.5 && $imc <= 24.9) {
    $classificacao = "Normal";

} elseif ($imc >= 25 && $imc <= 29.9) {
    $classificacao = "Sobrepeso";

} elseif ($imc >= 30 && $imc <= 34.9) {
    $classificacao = "Obesidade grau I";

} elseif ($imc >= 35 && $imc <= 39.9) {
    $classificacao = "Obesidade grau II";
    
} else { 
    $classificacao = "Obesidade grau III";
}


echo "Seu IMC é de: " . $imc . " kg/m²" . PHP_EOL;
echo "Classificação: " . $classificacao . PHP_EOL;
