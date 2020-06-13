<?php
session_start();

if(!isset($_SESSION["id"])){
    header("Location: login.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Area Restrita</title>
</head>
<body>
    <h1>Olá, <?= $_SESSION["nome"];?></h1>
    <p><a href="index.php">lista de usuarios</a></p>
    <p><a href="atualiza-usuario.php">Atualizar Cadastro</a></p>
    <p><a href="logout.php">Sair</a></p>
</body>
</html>