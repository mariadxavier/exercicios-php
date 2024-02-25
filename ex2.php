<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 2</title>
</head>
<body>
    <h1>Exercício 2:</h1>
    <p>Na usina de Angra dos Reis, os técnicos analisam a perda de massa de umm material radioativo. Sabendo-se que este perde 25% de sua masa a cada 30 segundos, crie um algoritmo que imprima o tempo necesario para que a massa desse material seja menos que 0.10</p>
    <form action="ex2.php" method="get">
        <label for="massa">Insira a massa em gramas do material radioativo:</label>
        <input type="number" name="massa">
        <button type="submit">Verificar tempo</button>
    </form>

    <hr>

    <?php 
        $massa = $_GET['massa'];
        $tempoEmSegundos = 0;

        function perderMassa($massa, $tempoEmSegundos) {
            $massa -= ($massa * 0.25);
            $tempoEmSegundos += 30;

            if ($massa < 0.10)
                return $tempoEmSegundos;
            else 
                return perderMassa($massa, $tempoEmSegundos);
        }

        $tempoFinal = perderMassa($massa, $tempoEmSegundos);


        echo "<br>O tempo necessário para que a massa inserida seja menor que 0.10 é de $tempoFinal segundos, ou ". $tempoFinal/60 . " minutos";
    ?>
    
</body>
</html>