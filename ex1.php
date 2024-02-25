<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 1</title>
</head>
<body>
    <h1>Exercício 1:</h1>
    <p>Chico tem 1,50m e cresce 2 centímetro pr ano, enquanto Juca tem 1,10m e cresce 3 centímetros por ano. Construa um algoritmo que calcule e imprima quantos anos serão necessários para que Juca seja maior que Chico </p>

    <?php 
            $chico = 150;
            $crescChico = 2;
    
            $juca = 110;
            $crescJuca = 3;
            $cont = 0;
    
            while ($juca <= $chico){                      
                $chico = $chico + $crescChico;
                $juca = $juca + $crescJuca;     
                $cont++;   
            } 
    
            echo "Juca levará ". $cont . " anos para ficar maior que Chico" ;
    ?>
    
</body>
</html>