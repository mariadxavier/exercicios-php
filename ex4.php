<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 4</title>
</head>
<body>
    <h1>Exercício 4:</h1>
    <p>Crie um vetor com 20 elementos inteiros. Imprima o maior e o menor, sem ordenar, o percentual de números pares e média dos elementos do vetor.</p>
    <hr>

    <?php 
        $array = [];
        $quantPares = 0;
        $valor = 0;

        echo "Elementos do array: <br>";

        for ($i = 0; $i <20; $i ++){
            array_push($array, rand(0,100));
        };

        foreach($array as $elem ) {
            if ($elem % 2 == 0 && $elem != 0){
                $quantPares++;
            }
            $valor += $elem;
            echo "  $elem  ";
        };

        $media = $valor / count($array);
        $maiorValor = max($array);
        $menorValor = min($array);
        $percentPares = ($quantPares/count($array)) * 100;

        echo "<br> <br>";
        echo "Maior valor: $maiorValor <br>";
        echo "Menor valor: $menorValor <br>";
        echo "Percentual de valores pares: $percentPares%<br>";
        echo "Média dos elementos: $media <br>";
    ?>
    
</body>
</html>