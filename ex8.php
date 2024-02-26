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

        <label for="nota1">Primeira Nota:</label>
        <input type="number" name="nota1" id="">

        <label for="nota2">Segunda Nota:</label>
        <input type="number" name="nota2" id="">

        <label for="nota3">Terceira Nota:</label>
        <input type="number" name="nota3" id="">

        <button type="submit"></button>
    </form>
    
    <?php 

    $NOME = $_GET['nome'];
    echo $NOME;
        
    ?>
    
</body>
</html>