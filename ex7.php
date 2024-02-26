<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 7</title>
</head>
<body>
    <h1>Exercício 7:</h1>
    <p>Faça um script em PHP que faça 5 perguntas para uma pessoa sobre um crime. São elas: <br>"Telefonou para a vítima?" <br>"Esteve no local do crime?" <br>"Mora perto da vítima?" <br>"Devia para a vítima?" <br>"Já trabalhou com a vítima?" <br>O programa deve no final emitir uma classificação sobre a participação da pessoa no crime. <br>Se a pessoa responder positivamente a 2 questões, ela deve ser classificada como "Suspeita". <br>Entre 3 e 4 como "cúmplice" e 5 como "Assasino". Caso contrário, ele será classificado como "Inocente". </p>
    <hr>

    <form action="ex7.php" method="get">
        <label for="q1">Telefonou para a vítima?</label>
        <select name="q1" id="q1">
            <option value="true">Sim</option>
            <option value="false">Não</option>
        </select>

        <label for="q2">Esteve no local do crime?</label>
        <select name="q2" id="q2">
            <option value="true">Sim</option>
            <option value="false">Não</option>
        </select>

        <label for="q3">Mora perto da vítima?</label>
        <select name="q3" id="q3">
            <option value="true">Sim</option>
            <option value="false">Não</option>
        </select>

        <label for="q4">Devia para a vítima?</label>
        <select name="q4" id="q4">
            <option value="true">Sim</option>
            <option value="false">Não</option>
        </select>

        <label for="q5">Já trabalhou com a vítima?</label>
        <select name="q5" id="q5">
            <option value="true">Sim</option>
            <option value="false">Não</option>
        </select>
    </form>

    <?php 
        
    ?>
    
</body>
</html>

