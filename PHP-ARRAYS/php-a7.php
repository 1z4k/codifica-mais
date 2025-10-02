<?php

$itens = ["Picanha", "Carvão", "Pão de Alho", "Refrigerante", "Cerveja"];
$precos = [89.90, 19.90, 15.50, 8.00, 45.00];

$numeroDeParticipantes = (int) readline("Quantas pessoas participaram do churrasco: ");

if ($numeroDeParticipantes <= 1) {
    echo "O churrasco foi cancelado, todo mundo furou!" . PHP_EOL;
} else {
    $custoTotal = 0;
    foreach ($precos as $preco) {
        $custoTotal = $custoTotal + $preco;
    }

    function dividirConta($valorTotal, $participantes)
    {
        // e retorne o valor que cada pessoa deve pagar.
        return $valorTotal / $participantes;
    }

    $valorPorPessoa = dividirConta($custoTotal, $numeroDeParticipantes);

    $precoMaisCaro = 0;
    $itemMaisCaro = '';
    $indice = 0;
    foreach ($precos as $preco) {
        if ($preco > $precoMaisCaro) {
            $precoMaisCaro = $preco;
            $itemMaisCaro = $itens[$indice];
        }
        $indice = $indice + 1;
    }

    echo "Custo total do churrasco: R$ " . $custoTotal . PHP_EOL;
    echo "Cada participante deve pagar: R$ " . $valorPorPessoa . PHP_EOL;
    echo "O item mais caro foi: " . $itemMaisCaro . " custando R$ " . $precoMaisCaro . PHP_EOL;
}

?>