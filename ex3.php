<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 3</title>
</head>
<body>
    <h1>Exercício 3:</h1>
    <p>Armazene 15 números inteiros em um vetor e imprima uma mensagem contendo o número e uma das mensagens: par ou ímpar. </p>
    <hr>

    <?php 
        $array = [];

        for ($i = 0; $i <15; $i ++){
            array_push($array, rand(0,100));
        }

        foreach($array as $parImpar => $elem ) {
            if ($elem % 2 == 0){
                $parImpar = "par";
            } else {
                $parImpar = "impar";
            }
            echo $elem . " - ". $parImpar . "<br>";
        };
    ?>
    
</body>
</html>