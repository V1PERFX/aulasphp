<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <title>ATIVIDADE 3</title>
    <style>
        .m {
            margin-top: 10px;
            margin-left: 10px;
        }
    </style>
</head>

<body>

    <form action="results/resultado3.php" method="post" class="m">
        <p>
            <label>QUAL DESSAS RESPOSTAS ESTÁ CORRETA</label>
        </p>
        <p>
            <input type="radio" name="quiz" value="get"> GET
        </p>
        <p>
            <input type="radio" name="quiz" value="post"> POST
        </p>
        <p>
            <input type="radio" name="quiz" value="action"> ACTION
        </p>
        <button class="btn btn-primary" type="submit">Enviar</button>
    </form>

</body>

</html>