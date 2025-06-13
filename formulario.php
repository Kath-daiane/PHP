<?php
include 'conexao.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Cadastro de Usuário</h2>
    <form action="cadastrar.php" method="POST">
        <label for="nome_usuario">Nome:</label>
        <input type="text" id="nome_usuario" name="nome_usuario" required><br><br>
 
        <label for="contato_usuario">Contato:</label>
        <input type="text" id="contato_usuario" name="contato_usuario" required><br><br>
 
        <label for="email_usuario">Email:</label>
        <input type="email" id="email_usuario" name="email_usuario" required><br><br>
 
        <label for="senha_usuario">Senha:</label>
        <input type="password" id="senha_usuario" name="senha_usuario" required><br><br>
 
        <button type="submit">Cadastrar</button>
</form>
</body>
</html>