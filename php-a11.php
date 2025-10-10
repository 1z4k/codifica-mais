<?php
function exibirMenu(): string
{
    echo "\n Gerenciamento de Estoque \n";
    echo "(1) Adicionar um produto\n";
    echo "(2) Remover um produto (Venda)\n";
    echo "(3) Verificar o estoque\n";
    echo "(4) Listar o estoque\n";
    echo "(5) Sair\n";
    return readline("Escolha uma opção: ");
}

function adicionarProduto(array &$estoque)
{
    $codigo = readline("Digite o código do produto: ");
    if (isset($estoque[$codigo])) {
        echo "Erro: Produto com este código já existe.\n";
        return;
    }
    $nome = readline("Digite o nome do produto: ");
    $tamanho = readline("Digite o tamanho: ");
    $cor = readline("Digite a cor: ");
    $quantidade = (int) readline("Digite a quantidade: ");

    $estoque[$codigo] = [
        'nome' => $nome,
        'tamanho' => $tamanho,
        'cor' => $cor,
        'quantidade' => $quantidade
    ];

    echo "Produto '$nome' adicionado com sucesso!\n";
}

function removerProduto(array &$estoque)
{
    $codigo = readline("Digite o código do produto a ser vendido: ");

    if (!isset($estoque[$codigo])) {
        echo "Erro: Produto não encontrado no estoque.\n";
        return;
    }

    $quantidadeVendida = (int) readline("Digite a quantidade a ser vendida: ");
    
    if ($quantidadeVendida > $estoque[$codigo]['quantidade']) {
        echo "Erro: Quantidade de venda maior que o estoque disponível.\n";
        return;
    }
    
    $estoque[$codigo]['quantidade'] -= $quantidadeVendida;
    echo "$quantidadeVendida unidade(s) do produto '{$estoque[$codigo]['nome']}' vendidas.\n";

    if ($estoque[$codigo]['quantidade'] == 0) {
        unset($estoque[$codigo]);
        echo "Produto esgotado e removido do estoque.\n";
    }
}

function verificarEstoque(array $estoque)
{
    $codigo = readline("Digite o código do produto a ser verificado: ");
    if (isset($estoque[$codigo])) {
        $produto = $estoque[$codigo];
        echo "Produto encontrado: {$produto['nome']}, Quantidade: {$produto['quantidade']}.\n";
    } else {
        echo "Produto com o código '$codigo' não encontrado no estoque.\n";
    }
}
function listarEstoque(array $estoque)
{
    echo "\n--- Lista de Estoque Atual ---\n";
    if (empty($estoque)) {
        echo "Estoque vazio.\n";
        return;
    }
    
    foreach ($estoque as $codigo => $produto) {
        echo "Código: $codigo\n";
        echo "  Nome: {$produto['nome']}\n";
        echo "  Tamanho: {$produto['tamanho']}\n";
        echo "  Cor: {$produto['cor']}\n";
        echo "  Quantidade: {$produto['quantidade']}\n";
        echo "";
    }
}

//estoque
$estoque = [
    '101' => [
        'nome' => 'Camiseta Básica',
        'tamanho' => 'M',
        'cor' => 'Preta',
        'quantidade' => 50
    ],
    '202' => [
        'nome' => 'Calça Jeans Slim',
        'tamanho' => '42',
        'cor' => 'Azul Escuro',
        'quantidade' => 30
    ],
    '303' => [
        'nome' => 'Moletom com Capuz',
        'tamanho' => 'G',
        'cor' => 'Cinza Mescla',
        'quantidade' => 25
    ],
    '404' => [
        'nome' => 'Vestido Floral',
        'tamanho' => 'P',
        'cor' => 'Estampado',
        'quantidade' => 15
    ]
];
$executando = true;

while ($executando) {
    $opcao = exibirMenu();

    switch ($opcao) {
        case '1':
            adicionarProduto($estoque);
            break;
        case '2':
            removerProduto($estoque);
            break;
        case '3':
            verificarEstoque($estoque);
            break;
        case '4':
            listarEstoque($estoque);
            break;
        case '5':
            echo "Saindo do sistema...\n";
            $executando = false;
            break;
        default:
            echo "Opção inválida. Tente novamente.\n";
    }
}

?>