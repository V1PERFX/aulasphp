<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <title>Document</title>
</head>

<body>
    <?php
        include "cabecalho.php";
        include "conteudo.php";
        include "rodape.php";

        require "funcoes.php";
        echo soma(5, 8);

    ?>

</body>

</html>