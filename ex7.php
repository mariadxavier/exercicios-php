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
        <select name="q1">
            <option value=" "></option>
            <option value="true">Sim</option>
            <option value="false">Não</option>
        </select>
        <br> <br>

        <label for="q2">Esteve no local do crime?</label>
        <select name="q2" id="q2">
        <option value=" "></option>
            <option value="true">Sim</option>
            <option value="false">Não</option>
        </select>
        <br> <br>

        <label for="q3">Mora perto da vítima?</label>
        <select name="q3" id="q3">
            <option value=" "></option>
            <option value="true">Sim</option>
            <option value="false">Não</option>
        </select>
        <br> <br>

        <label for="q4">Devia para a vítima?</label>
        <select name="q4" id="q4">
            <option value=" "></option>
            <option value="true">Sim</option>
            <option value="false">Não</option>
        </select>
        <br> <br>

        <label for="q5">Já trabalhou com a vítima?</label>
        <select name="q5" id="q5">
            <option value=" "></option>
            <option value="true">Sim</option>
            <option value="false">Não</option>
        </select>
        <br> <br>

        <button type="submit">Enviar resposta</button>
        <br><br>
    </form>

    <?php 
    // O programa deve no final emitir uma classificação sobre a participação da pessoa no crime. <br>Se a pessoa responder positivamente a 2 questões, ela deve ser classificada como "Suspeita". <br>Entre 3 e 4 como "cúmplice" e 5 como "Assasino". Caso contrário, ele será classificado como "Inocente". </p>
    $respostas = ["q1" => $_GET['q1'],"q2" => $_GET['q2'],"q3" => $_GET['q3'],"q4" => $_GET['q4'],"q5" => $_GET['q5']];

    $verdadeiras = 0;

    foreach ($respostas as $key => $value) {
        if($value == 'true') {
            $verdadeiras++;
        };
    };

    function resultado($verdadeiras) {
        if($verdadeiras == 2) {
            return "Suspeito";
        }elseif($verdadeiras == 3 || $verdadeiras == 4) {
            return "Cúmplice";
        }elseif($verdadeiras == 5) {
            return "Assassino";
        }else {
            return "Inocente!";
        };
    }

    echo resultado($verdadeiras);
        
    ?>

    
    
</body>
</html>

