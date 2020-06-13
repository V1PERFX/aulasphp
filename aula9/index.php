<?php
session_start();

if(!isset($_SESSION["id"])){
    header("Location: login.php");
    exit;
}
    include "services/conexao.php";
    include "classes/Usuario.php";
    $usu = new Usuario($servidor, $usuario, $senha);

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Usuarios</title>
</head>
<body>
    <?php
        $listaDeUsuarios = $usu->listarUsuarios();
        echo "<pre>";
        print_r($listaDeUsuarios);
        echo "</pre>";
    ?>
    <table>
        <tr>
            <td>id</td>
            <td>nome</td>
            <td>email</td>
            <td>senha</td>
        </tr>
        <?php
            if(count($listaDeUsuarios) > 0) {
                for($i = 0; $i < count($listaDeUsuarios); $i++){
                    echo "<tr>";
                        foreach($listaDeUsuarios[$i] as $valor){
                            echo "<td> $valor </td>";
                        }
        ?>
                <td><a href="excluir.php?idDl=<?= $listaDeUsuarios[$i]["id"]?>">excluir</a></td>
        <?php
                    echo "</tr>";
                }
            }
        ?>
    </table>
</body>
</html>