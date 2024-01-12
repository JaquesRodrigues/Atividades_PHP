<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Atividade 2</title>
</head>

<body>
    <h1>Largura e Altura do Triangulo</h1>

    <?php

    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $comprimento = $_POST["comprimento"];
        $largura = $_POST["largura"];


        $comprimento = floatval($comprimento);
        $largura = floatval($largura);

        $area = $comprimento * $largura;
        $perimetro = 2 * ($comprimento + $largura);

        echo "<p>Área do Retângulo: $area</p>";
        echo "<p>Perimentro do Retângulo: $perimetro</p>";
    } else {
        echo "<p>Nenhum Valor Foi Inserido.</p>";
    }

    echo ""
    ?>
    <a href='index.html'><button>Voltar</button>
</body>

</html>