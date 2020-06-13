<?php
    include "services/conexao.php";
    include "classes/Usuario.php";
    $usu = new Usuario($servidor, $usuario, $senha);

    if(isset($_GET["idDl"])){
        $idUsuario = $_GET["idDl"];
        $usu->excluirUsuario($idUsuario);
        header("Location: index.php");
    }else{
        header("Location: index.php");
    }
?>