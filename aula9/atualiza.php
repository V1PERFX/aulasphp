<?php
    include "services/conexao.php";
    include "classes/Usuario.php";
    $usu = new Usuario($servidor, $usuario, $senha);

//captura dos dados do formulario
if(isset($_POST["id"])){
    $id = $_POST["id"];
    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $senha = $_POST["senha"];

    $usu->atualizarUsuario($id, $nome, $email, $senha);

    header("Location: index.php");
}else{
    header("Location: atualiza-usuario.php"); 
}
?>