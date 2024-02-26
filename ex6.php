<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 6</title>
</head>
<body>
    <h1>Exercício 6:</h1>
    <p>Crie um algoritmo com uma matriz 5x5 e escreva os elementos da diagnal principal. Liste dos números pares com a localização na matriz.</p>
    <hr>
    <?php 

    $matriz = [];
    for ($i = 0; $i < 5; $i++) {
        for ($j = 0; $j < 5; $j++) {
            $matriz[$i][$j] = rand(0, 100); // Valores aleatórios de 1 a 100
        };
    };       

    echo "Matriz: <br>";
    foreach ($matriz as $linha) {
        foreach ($linha as $elemento) {
         echo $elemento . " ";
        };
        echo "<br>";
    };
    
    echo "<br>Diagonal Principal: <br>";
    for ($i = 0; $i < 5; $i++) {
        echo $matriz[$i][$i] . "<br>";
    };

    echo "<br>Elementos pares e localização: <br>";
    for ($i = 0; $i < 5; $i++) {
        for ($j = 0; $j < 5; $j++) {
            if ($matriz[$i][$j] % 2 == 0) {
                echo "Elemento: " . $matriz[$i][$j] . " - Localização: ($i, $j)<br>";
            };
        };
    };
    ?>
    
</body>
</html>