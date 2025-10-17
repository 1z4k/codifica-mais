<?php

function calcularMedia($notas)
{
    $soma = 0;
    $quantidadeDeNotas = 0;
    foreach ($notas as $nota) {
        $soma = $soma + $nota;
        $quantidadeDeNotas = $quantidadeDeNotas + 1;
    }
    return $soma / $quantidadeDeNotas;
}

$notasAlunos = [
    [8.5, 6.0, 7.8, 9.2, 5.5], // Aluno 1
    [7.0, 8.0, 6.5, 7.5, 8.5], // Aluno 2
    [6.5, 7.5, 4.5, 5.5, 7.0], // Aluno 3
    [5.0, 4.6, 7.8, 9.0, 6.0]  // Aluno 4
];

$totalAprovados = 0;
$totalReprovados = 0;
$numeroDoAluno = 1;

foreach ($notasAlunos as $notasDoAluno) {
    $media = calcularMedia($notasDoAluno);

    if ($media >= 7.0) { 
        $status = "Aprovado";
        $totalAprovados = $totalAprovados + 1;
    } else {
        $status = "Reprovado";
        $totalReprovados = $totalReprovados + 1;
    }

    echo "Aluno " . $numeroDoAluno . ": Média " . $media . " - Status: " . $status . PHP_EOL;
    $numeroDoAluno = $numeroDoAluno + 1;
}

echo "Total de alunos aprovados: " . $totalAprovados . PHP_EOL;
echo "Total de alunos reprovados: " . $totalReprovados . PHP_EOL;