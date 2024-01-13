<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Atividade 3</title>
</head>
<body>
    <div class="container">
        <h1>Calcular Salario</h1>
        <form action="./index.php" method="post" >
            <label for="salario">Salario por Hora</label>
            <input type="number" name="horas">
            <label for="horas">Horas Trabalhadas no Mês</label>
            <input type="number" name="salario">
            <input type="submit" value="Calcular" class="submit" >    
    </div>

    <div class="calculo">
        <?php 
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                
                $horas = $_POST["horas"];
                $horas = floatval($horas);
                $salario = $_POST["salario"];
                $salario = floatval($salario);
                $bruto = $salario * $horas;

                $ir = ($bruto * 11) / 100; 
                $inss = ($bruto * 8) / 100; 
                $sindicato = ($bruto * 5) / 100; 
                $liquido = $bruto - $ir - $inss - $sindicato;

                if ($horas == 0 && $salario == 0) {
                    echo "<p>Preencha todos os campos</p>";
                } else {
                    echo "<p>Salario Bruto: R$$bruto</p>
                    <p>IR(11%):             R$$ir</p>
                    <p>INSS(8%):            R$$inss</p>
                    <p>Sindicato(5%):       R$$sindicato</p>
                    <p>Salario Liquido =    R$$liquido</p>";
                }
                
            }
        ?>
    </div>
</body>
</html>