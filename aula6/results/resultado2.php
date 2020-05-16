<?php
$nota1 = $_POST["txtNota1"];
$nota2 = $_POST["txtNota2"];
$nota3 = $_POST["txtNota3"];
$media = ($nota1 + $nota2 + $nota3) / 3;

echo "Olá, meu nome é: {$_POST["txtNome"]} <br/>";
echo "A minha média é: $media <br/>";

if ($media >= 6){
    echo "ALUNO APROVADO<br/>";
} else {
    echo "ALUNO REPROVADO<br/>";
}
?>
<a href="../index2.php">Voltar</a>