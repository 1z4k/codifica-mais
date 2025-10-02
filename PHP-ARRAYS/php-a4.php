<?php

function calculoDesconto($valorInicial, $porcentagemDesconto)
{
    $desconto = $valorInicial * ($porcentagemDesconto / 100);

    $valorComDesconto = $valorInicial - $desconto;

    return $valorComDesconto;
}

$valorProduto = readline("Informe o Valor do produto: ");
$valorDeDesconto = readline("informe o valor de desconto: ");

$precoComDesconto = calculoDesconto($valorProduto, $valorDeDesconto);

echo "O preço final com desconto desse produto é de: R$ " . $precoComDesconto;