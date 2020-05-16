<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <title>ATIVIDADE 2</title>
    <style>
        .m {
            margin-top: 10px;
            margin-left: 10px;
        }
    </style>
</head>

<body>

    <form action="results/resultado2.php" method="post" class="m">
        <p>
            <label>Nome:</label>
            <input type="text" name="txtNome">
        </p>
        <p>
            <label>Notas:</label>
            <br />
            <input type="number" name="txtNota1">
            <p>
                <input type="number" name="txtNota2">
            </p>
            <input type="number" name="txtNota3">
        </p>
        <button class="btn btn-primary" type="submit">Enviar</button>
    </form>

</body>

</html>