<?php
function calcularLatas($metrosQuadrados)
{
    $coberturaPorLata = 18 * 6;
    return ceil($metrosQuadrados / $coberturaPorLata);
}

function calcularGaloes($metrosQuadrados)
{
    $coberturaPorGalao = 3.6 * 6;
    return ceil($metrosQuadrados / $coberturaPorGalao);
}

function calcularMistura($metrosQuadrados)
{
    $coberturaPorLata = 18 * 6;
    $coberturaPorGalao = 3.6 * 6;

    $latas = floor($metrosQuadrados / $coberturaPorLata);
    $metrosRestantes = $metrosQuadrados % $coberturaPorLata;
    $galoes = ceil($metrosRestantes / $coberturaPorGalao);

    return ['latas' => $latas, 'galoes' => $galoes];
}

function calcularPreco($quantidade, $precoUnitario)
{
    $preco = $quantidade * $precoUnitario;
    $precoComFolga = $preco + ($preco * 0.1);
    return ceil($precoComFolga);
}

echo "Informe o tamanho da área a ser pintada em metros quadrados: ";
$metrosQuadrados = floatval(fgets(STDIN));

// Calcular quantidades e preços
$latas = calcularLatas($metrosQuadrados);
$precoLatas = calcularPreco($latas, 80);

$galoes = calcularGaloes($metrosQuadrados);
$precoGaloes = calcularPreco($galoes, 25);

$mistura = calcularMistura($metrosQuadrados);
$precoMistura = calcularPreco(($mistura['latas'] * 80) + ($mistura['galoes'] * 25), 1);

// Exibir os resultados
echo "\nComprar apenas latas de 18 litros\n";
echo "\tQuantidade de latas: $latas\n";
echo "\tPreço total: R$ $precoLatas\n\n";

echo "Comprar apenas galões de 3,6 litros\n";
echo "\tQuantidade de galões: $galoes\n";
echo "\tPreço total: R$ $precoGaloes\n\n";

echo "Misturar latas e galões para obter o menor preço\n";
echo "\tQuantidade de latas: {$mistura['latas']}\n";
echo "\tQuantidade de galões: {$mistura['galoes']}\n";
echo "\tPreço total: R$ $precoMistura\n";
