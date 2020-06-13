<?php
    include "services/conexao.php";
    include "classes/Usuario.php";
    $usu = new Usuario($servidor, $usuario, $senha);

    if(isset($_POST["nome"])){
        $nome = $_POST["nome"];
        $l = $usu->buscarUsuario2($nome);
    }else{
        header("Location: busca-usuario.php");
    }

    $usu->buscarUsuario2($nome);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table>
        <tr>
            <td>Id</td>
            <td>Nome</td>
            <td>Email</td>
            <td>Senha</td>
        </tr>
            <?php

                if(count($l) > 0){
                    for($i=0; $i < count($l); $i++){
                        echo "<tr>";
                        foreach($l[$i] as $valor){
                            echo "<td>$valor</td>";
                        }
                        echo "</tr>";
                    }
                    
                }else{
                    echo "<td>achei nada</td>";
                }
            ?>
    </table>
</body>
</html>