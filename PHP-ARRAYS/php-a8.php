<?php

function aplicarDesconto($valorCompra, $porcentagemDesconto)
{
    $valorDoDesconto = $valorCompra * ($porcentagemDesconto / 100);
    $valorFinal = $valorCompra - $valorDoDesconto;
    return $valorFinal;
}
function calcularDescontoProgressivo($valorCompra)
{
    $porcentagem = 0;
    if ($valorCompra > 500) {
        $porcentagem = 20;
    } elseif ($valorCompra >= 100 && $valorCompra <= 500) {
        $porcentagem = 10;
    }

    $valorFinalComDesconto = aplicarDesconto($valorCompra, $porcentagem);

    return $valorFinalComDesconto;
}

$valorDaCompra = (float) readline("Digite o valor total da compra: R$ ");

$valorFinal = calcularDescontoProgressivo($valorDaCompra);

echo "O valor final da compra com desconto é: R$ " . $valorFinal . PHP_EOL;