<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <title>ATIVIDADE 1</title>
    <style>
        .m {
            margin-top: 10px;
            margin-left: 10px;
        }
    </style>
</head>

<body>

    <form action="#" method="post" class="m">
            <p>
                <label>Nome:</label>
                <input type="text" name="txtNome">
            </p>
            <p>
                <label>Idade:</label>
                <input type="text" name="txtIdade">
            </p>
            <p>
                <label>Escolaridade:</label>
                <select name="escolaridade">
                    <option value="Ensino Médio">Ensino Médio</option>
                    <option value="Ensino Superior">Ensino Superior</option>
                </select>
            </p>
            <p>
                <label>Sexo: </label>
                <input type="radio" name="rdGenero" value="Maculino"> Masculino
                <input type="radio" name="rdGenero" value="Feminino"> Feminino
            </p>
        <button class="btn btn-primary" type="submit">Enviar</button>
    </form>


    <?php
    if (!empty($_POST)) {
        echo "Olá, meu nome é: {$_POST["txtNome"]} <br/>";
        echo "A minha idade é: {$_POST["txtIdade"]} <br/>";
        echo "A minha escolaridade é: {$_POST["escolaridade"]} <br/>";
        echo "Meu sexo é: {$_POST["rdGenero"]} <br/>";
    }

    ?>
</body>

</html>