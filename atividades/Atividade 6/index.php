<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./src/styles/global.css">
    <title>Ma Grand Collation 🍔</title>
</head>

<body>
    <header class="header">
        <nav class="nav">
            <h1>Meu Lanchão</h1>
            <ul class="nav-list">
                <li class='nav-list-item'>Sobre</li>
                <li class='nav-list-item'>Contato</li>
                <li class='nav-list-item'>Socials</li>
            </ul>
        </nav>
    </header>

    <main>
        <div>
            <h2>Comidas</h2>
            <div class="list">
                <ul class="lanches-list">
                    <?php
                    require './itens.php';
                    foreach ($Comidas as $comida) {
                        echo "<li class='list-item'>$comida[comida]</li>";
                        echo "<div class='img-item'>";
                        echo "<img src='./src/images/{$comida['foto']}'>";
                        echo "</div>";
                    }
                    // echo "<li>$Comidas[comida]</li>";
                    ?>
                </ul>
                <button class="buy-btn">Comprar</button>
            </div>
        </div>
        <div class="list">
            <h2>Acompanhamentos</h2>
            <div>
                <ul class="acompanhamentos-list">
                    <?php
                    require './itens.php';
                    foreach ($Acompanhamentos as $acompanhamento) {
                        echo "<li class='list-item'>$acompanhamento[acompanhamento]</li>";
                        echo "<div class='img-item'>";
                        echo "<img src='./src/images/{$acompanhamento['foto']}'>";
                        echo "</div>";
                    }
                    // echo "<li>$Comidas[comida]</li>";
                    ?>
                </ul>
            </div>
            <button class="buy-btn">Comprar</button>
        </div>
        <div class="list">
            <h2>Bebidas</h2>
            <div>
                <ul class="bebidas-list">
                    <?php
                    require './itens.php';
                    foreach ($Bebidas as $bebida) {
                        echo "<li class='list-item'>$bebida[bebida]</li>";
                        echo "<div class='img-item'>";
                        echo "<img src='./src/images/{$bebida['foto']}'>";
                        echo "</div>";
                    }
                    // echo "<li>$Comidas[comida]</li>";
                    ?>
                </ul>
            </div>
            <button class="buy-btn">Comprar</button>
        </div>
    </main>

</body>

</html>