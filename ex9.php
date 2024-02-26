<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 9</title>
</head>
<body>
    <h1>Exercício 9:</h1>
    <p>Usando POST, crie um formulário que receba um login e senha de um usuário. Faça a validação dos campos de modo que o usuário tenha que preencher todos os campos. Se  o login for "etec" e a senha "informatica", exiba uma mensagem na tela de "logado com sucesso" e não exiba mais o formulário de login.</p>
    <hr>

    <form action="ex9.php" method="post">
        <label for="login">Login:</label>
        <input type="text" name="login">
        
        <label for=""></label>
        <input type="password" name="senha">

        <button type="submit">Enviar</button>
    </form>

    <?php 
        
    ?>
    
</body>
</html>