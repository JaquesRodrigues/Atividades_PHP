<?php
function calcularMedia($notas)
{
    $soma = array_sum($notas);
    $quantidade = count($notas);
    return $soma / $quantidade;
}

echo "Informe a nota 1: ";
$nota1 = floatval(fgets(STDIN));

echo "Informe a nota 2: ";
$nota2 = floatval(fgets(STDIN));

echo "Informe a nota 3: ";
$nota3 = floatval(fgets(STDIN));

$notas = [$nota1, $nota2, $nota3];

$media = calcularMedia($notas);

echo "\nNotas inseridas: N1 = $nota1 | N2 = $nota2 | N3 = $nota3\n";
echo "Média Geral: " . number_format($media, 2) . "\n";

if ($media >= 6) {
    echo "[Aprovado]\n";
} else {
    echo "[Reprovado]\n";
}
