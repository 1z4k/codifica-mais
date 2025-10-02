<?php

function calcularSalarioTotal($salarioBase, $horasExtras)
{
    $valorHoraNormal = $salarioBase / 160;
    $valorHoraExtra = $valorHoraNormal * 1.5;

    $valorTotalHorasExtras = $horasExtras * $valorHoraExtra;

    $salarioTotal = $salarioBase + $valorTotalHorasExtras;

    return $salarioTotal;
}

function listarFuncionarios($funcionarios)
{
    echo "Folha de Pagamentos e hoararios: " . PHP_EOL;
    foreach ($funcionarios as $funcionario) {
        $nome = $funcionario["nome"];
        $salarioBase = $funcionario["salario_base"];
        $horasExtras = $funcionario["horas_extras"];

        $salarioTotal = calcularSalarioTotal($salarioBase, $horasExtras);

        echo "Nome: " . $nome . PHP_EOL;
        echo "Salário Base: R$ " . $salarioBase . PHP_EOL;
        echo "Horas Extras: " . $horasExtras . PHP_EOL;
        echo "Salário Total: R$ " . $salarioTotal . PHP_EOL;
    }
}

$listaDeFuncionarios = [
    [
        "nome" => "Pedro",
        "salario_base" => 2500,
        "horas_extras" => 10
    ],
    [
        "nome" => "Renata",
        "salario_base" => 3000,
        "horas_extras" => 5
    ],
    [
        "nome" => "Sérgio",
        "salario_base" => 2800,
        "horas_extras" => 8
    ],
    [
        "nome" => "Vanessa",
        "salario_base" => 3200,
        "horas_extras" => 12
    ],
    [
        "nome" => "André",
        "salario_base" => 1700,
        "horas_extras" => 0 
    ]
];

listarFuncionarios($listaDeFuncionarios);

?>