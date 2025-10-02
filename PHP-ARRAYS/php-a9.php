<?php

$estoque = [
    ["Bermuda", 59.9, 6],    // Produto 1
    ["Camisa", 89.9, 5],      // Produto 2
    ["Sapato", 179.9, 10],   // Produto 3
    ["Calça", 99.9, 7]        // Produto 4
];

$valorTotalEstoque = 0;

foreach ($estoque as $produto) {
    $preco = $produto[1];
    $quantidade = $produto[2];

    $valorTotalEstoque = $valorTotalEstoque + ($preco * $quantidade);
}

echo "O valor total do estoque da loja é: R$ " . $valorTotalEstoque . PHP_EOL;