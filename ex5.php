<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 5</title>
</head>
<body>
    <h1>Exercício 5:</h1>
    <p>Crie 2 vetores com 10 números inteiros cada. Gere e imprima um vetor dos números não comuns aos vetores. Faça um merge dos vetores e mostre o resultado</p>
    <hr>

    <?php 
            $array1 = [];
            $array2 = [];
    
            echo "Elementos dos arrays: <br>";
    
            for ($i = 0; $i <10; $i ++){
                array_push($array1, rand(0,100));
                array_push($array2, rand(0,100));
            };

            echo "<br>";
            echo "Vetor 1: <br>";
            print_r($array1);
            echo "<br> <br>";
            echo "Vetor 2: <br>";
            print_r($array2);
            echo "<br> <br>";

            $diferentes = array_diff($array1,$array2);
            echo "Valores não comuns nos vetores: <br>";
            print_r($diferentes);

            echo "<br> <br>";
            echo "Merge dos vetores: <br>";
            print_r(array_merge($array1, $array2));

            
    ?>
    
</body>
</html>