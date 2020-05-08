<?php
    /*
    PROGRAMAÇÃO BACK-END
    ESTRUTURA CONDICIONAL - IF
    AULA 2 - 03/04/2020
    */

    
    // ATIVIDADE 1
    /*
    Ler um valor e escrever a mensagem É MAIOR QUE 10! se o valor lido for maior que 10, caso contrário escrever NÃO É MAIOR QUE 10!
    */
    $n1 = 10;
    if ($n1 > 10){
        echo "O $n1 É MAIOR QUE 10<br /><br />";
    } else {
        echo "O $n1 NÃO É MAIOR QUE 10<br /><br />";
    }
    
    
    // ATIVIDADE 2
    /*
    Ler um valor e escrever se é positivo ou negativo (considere o valor zero como positivo).
    */
    $valor = -2;
    if ($valor >= 0) {
        echo "NÚMERO POSITIVO!<br /><br />";
    } else {
        echo "NÚMERO NEGATIVO!<br /><br />";
    }


    // ATIVIDADE 3
    /*
    Ler as notas da 1a. e 2a. avaliações de um aluno. Calcular a média aritmética simples e escrever uma mensagem que diga se o aluno foi ou não aprovado (considerar que nota igual ou maior que 6 o aluno é aprovado). Escrever também a média calculada.
    */
    $nota1 = 9.9;
    $nota2 = 5.5;
    $media = ($nota1 + $nota2) / 2;
    echo "MÉDIA = $nota1 + $nota2 / 2<br />";
    if ($media>= 6){
        echo "ALUNO APROVADO<br /><br />";
    } else {
        echo "ALUNO REPROVADO<br /><br />";
    }


    // ATIVIDADE 4
    /*
    Ler dois valores (considere que não serão lidos valores iguais) e escrever o maior deles.
    */
    $valor1 = 12;
    $valor2 = 10;

    if ($valor1 > $valor2){
        echo "$valor1<br /><br />";
    } else {
        echo "$valor2<br /><br />";
    }
    
    
    // ATIVIDADE 5
    /*
    Ler dois valores (considere que não serão lidos valores iguais) e escrevê-los em ordem crescente.
    */
    $nn1 = 5;
    $nn2 = 25;

    if ($nn1 > $nn2){
        echo "$nn2, $nn1<br /><br />";
    } else {
        echo "$nn1, $nn2<br /><br />";
    }


    // ATIVIDADE 6
    /*
    Ler o salário fixo e o valor das vendas efetuadas pelo vendedor de uma empresa. Sabendo-se que ele recebe uma comissão de 3% sobre o total das vendas até R$ 1.500,00 mais 5% sobre o que ultrapassar este valor, calcular e escrever o seu salário total.
    */
    $vendas = 1000;
    $salario = 1000;
    if ($vendas <= 1500){
        $total = $salario + ($vendas * 0.03);
    } else {
        $total = $salario + ($vendas * 0.05);
    }
    echo "VALOR TOTAL DAS VENDAS É $total<br /><br />";


    // ATIVIDADE 7
    /*
    Ler 3 valores (considere que não serão informados valores iguais) e escrever o maior deles.
    */
    $val1 = 21;
    $val2 = 15;
    $val3 = 10;
    if ($val1 >= $val2 && $val1 >= $val3){
        echo "O MAIOR VALOR É $val1<br /><br />";
    } elseif ($val2 >= $val1 && $val2 >= $val3){
        echo "O MAIOR VALOR É $val2<br /><br />";
    } else {
        echo "O MAIOR VALOR É $val3<br /><br />";
    }

    
    // ATIVIDADE 8
    /*
    Ler 3 valores (considere que não serão informados valores iguais) e escrever a soma dos 2 maiores.
    */
    $a = 50;
    $b = 80;
    $c = 45;
    if ($a < $b && $a < $c){
        $totali = $b + $c;
        echo "A SOMA É $totali de $b + $c<br /><br />";
    } elseif ($b < $a && $b < $c){
        $totali = $a + $c;
        echo "A SOMA É $totali de $a + $c<br /><br />";
    } else {
        $totali = $a + $b;
        echo "A SOMA É $totali de $a + $b<br /><br />";
    }
?>