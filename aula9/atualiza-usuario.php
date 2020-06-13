<?php
session_start();
if(!isset($_SESSION["id"])){
    header("Location: login.php");
    exit;
}
    include "services/conexao.php";
    include "classes/Usuario.php";
    $usu = new Usuario($servidor, $usuario, $senha);

    $id = $_SESSION["id"];
    
    $r = $usu->buscarUsuarioId($id);
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atualizar meus dados</title>
</head>
<body>
    <form action="atualiza.php" method="POST">
        <label>Id:</label>
        <input type="number" name="id" readonly value="<?=$r["id"]?>"><br>
        <label>Nome:</label>
        <input type="text" name="nome" value="<?=$r["nome"]?>"><br>
        <label>Email:</label>
        <input type="email" name="email" value="<?=$r["email"]?>"><br>
        <label>Senha:</label>
        <input type="text" name="senha" value="<?=$r["senha"]?>"><br>
        <input type="submit" value="Atualizar Cadastro">
    </form>
</body>
</html>