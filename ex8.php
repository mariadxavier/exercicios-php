<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 8</title>
</head>
<body>
    <h1>Exercício 8:</h1>
    <p>Usando o método GET, crie um formulário que receba o nome do estudante, 3 notas de 0 a 10 e calcule a média quando um botão de submit for pressionado. Faça a validação dos campos de modo que usuário tenha que preencher todos eles e todos numéricos.</p>
    <hr>

    <form action="ex8.php" method="get">
        <label for="nome">Insira seu nome:</label>
        <input type="text" name="nome">
        <br> <br>

        <label for="nota1">Primeira Nota:</label>
        <input type="number" name="nota1" id="" min="0" max="10">
        <br> <br>

        <label for="nota2">Segunda Nota:</label>
        <input type="number" name="nota2" id=""  min="0" max="10">
        <br> <br>

        <label for="nota3">Terceira Nota:</label>
        <input type="number" name="nota3" id=""  min="0" max="10">
        <br> <br>

        <button type="submit">Enviar</button>
    </form>
    
    <?php 
    if (empty($nome) || empty($nota1 ) || empty($nota2) || empty($nota3)) {
        echo '<h1>Preencha todos os campos!</h1>';
    };

    $nome = $_GET['nome'];
    $notas = ["nota 1" => $_GET['nota1'], "nota 2" => $_GET['nota2'],"nota 3" => $_GET['nota3']];
    $nota = 0;
    foreach($notas as $key => $value) {
        $nota += $value;
    };

    $media = $nota / count($notas);
    
    echo "Média de $nome".": " . number_format($media, 1, '.', ',');
        
    ?>
    
</body>
</html>