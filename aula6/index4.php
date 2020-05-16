<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <title>ATIVIDADE 4</title>
    <style>
        .m {
            margin-top: 10px;
            margin-left: 10px;
        }
    </style>
</head>

<body>

    <form action="results/resultado4.php" method="post" class="m">
        <p>
            <label>Digite o primeiro valor:</label>
            <input type="text" name="valor1" required>
        </p>
        <p>
            <label>Digite o segundo valor:</label>
            <input type="text" name="valor2" required>
        </p>
        <p>
            <input type="radio" name="operacao" value="a"> Adição<br>
            <input type="radio" name="operacao" value="s"> Subtração<br>
            <input type="radio" name="operacao" value="m"> Multiplicação<br>
            <input type="radio" name="operacao" value="d"> Divisão
        </p>
        <button class="btn btn-primary" type="submit">Enviar</button>
    </form>

</body>

</html>