<?php
 $servidor = "mysql:host=HOST BANCO DE DADOS;dbname=NOME DO DB";
 $usuario = "NOME DE USUARIO DB";
 $senha = "SENHA DO USUARIO DB";
//$conexao = new PDO("mysql:host=HOST BANCO DE DADOS;dbname=NOME DO DB", "NOME DE USUARIO DB", "SENHA DO USUARIO DB");

 try{
    $conexao = new PDO($servidor, $usuario, $senha);
    echo "Conexão realizada com sucesso";
 } catch(Exception $e) {
    echo "Erro de conexão".$e->getMessage();
 }


?>