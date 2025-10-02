<?php

$totalConta = readline("Digite o valor total da conta: ");
$porcentagemGorjeta = readline ("Quantos porcento de gorjeta deseja: ");

$totalConta = (float) $totalConta;
$porcentagemGorjeta = (float) $porcentagemGorjeta;

$gorjetaTotal = $totalConta * ($porcentagemGorjeta / 100);

$totalAPagar = $totalConta + $gorjetaTotal;


echo "Detalhes da conta: " . PHP_EOL;
echo "Valor da gorjeta: R$ " . $gorjetaTotal . PHP_EOL;
echo "Total produtos/serviços: R$ " . $totalConta . PHP_EOL;
echo "Total a ser pago: R$ " . $totalAPagar;
