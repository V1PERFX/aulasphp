<?php

//ATIVIDADE 1
/*
Um funcionário irá receber um aumento de acordo com o seu plano de trabalho, de acordo com a
tabela abaixo:
--PLANO            --AUMENTO
--A                --10%
--B                --15%
--C                --20%
Faça um programa que leia o plano de trabalho e o salário atual de um funcionário e calcula e
imprime o seu novo salário. Use o comando switch.
*/
$salario = 850;
$plano = "c";

switch($plano){
    case "a":
        $salario += $salario * 0.10;
    break;
    case "b":
        $salario += $salario * 0.15;
    break;
    case "c":
        $salario += $salario * 0.20;
    break;
    default:
        $salario;
}
echo "O plano é: $plano <br/> O salario é: $salario <br/><br/>";

//ATIVIDADE 2
/*
Faça um programa que receba dois números e execute as operações listadas a seguir de acordo com a escolha do usuário:
--ESCOLHA DO USUARIO           --OPERAÇÃO
--1                            --MÉDIA ENTRE OS NÚMEROS DIGITADOS
--2                            --DIFERENÇA ENTRE OS NÚMEROS
--3                            --PRODUTOS ENTRE OS NÚMEROS DIGITADOS
--4                            --DIVISÃO DO PRIMEIRO PELO SEGUNDO
*/
$n1 = 10;
$n2 = 5;

$op = 2;

switch($op){
    case 1:
        $result = ($n1 + $n2) / 2;
    break;
    case 2:
        $result = $n1 - $n2;
    break;
    case 3:
        $result = $n1 * $n2;
    break;
    case 4:
        $result = $n1 / $n2;
    break;
    default:
    echo "operacao invalida";
    $result = 0;
}
echo "Operacao é $op <br/> O resultado é: $result<br/><br/>";

//ATIVIDADE 3
/*
Escreva um algoritmo para imprimir os números de 1 (inclusive) a 10 (inclusive) em ordem crescente.
*/
for ($contador = 1; $contador <= 10; $contador++){
    echo " $contador";
}
echo "<br/><br/>";

//ATIVIDADE 4
/*
Escreva um algoritmo para imprimir os números de 1 (inclusive) a 10 (inclusive) em ordem decrescente.
*/
for ($contador2 = 10; $contador2 >= 1; $contador2--){
    echo " $contador2";
}
echo "<br/><br/>";

//ATIVIDADE 5
/*
Ler um valor N e imprimir todos os valores inteiros entre 1 (inclusive) e N (inclusive). Considere que o N sempre maior que ZERO.
*/
$n = 20;
for ($contador3 = 1; $contador3 <= $n; $contador3++){
    echo " $contador3";
}
echo "<br/><br/>";

//ATIVIDADE 6
/*
Escreva um algoritmo que calcule e imprima a tabuada de um valor escolhido um valor entre 1 e 10 (1 a 10).
*/
$numeroTabu = 7;
for ($contador4 = 1; $contador4 <= 10; $contador4++){
    $resultados = $numeroTabu * $contador4;
    echo "$numeroTabu x $contador4 = $resultados<br/>";
}
echo "<br/><br/>";


//ATIVIDADE 7
/*
Fazer tabuada do 1 ao 10 e escrever cada linha multiplicando de 1 até 10.
*/
for ($cont_tabuada = 1; $cont_tabuada <= 10; $cont_tabuada++){
    echo "<br/>";
    for ($conta = 1; $conta <= 10; $conta++){
        $resultado = $conta * $cont_tabuada;
        echo "$conta x $cont_tabuada = $resultado <br/>";
    }
}
echo "<br/><br/>";

//ATIVIDADE 8
/*
Imprimir somente números pares 1 a 100.
*/
for ($at8 = 1; $at8 <= 100; $at8++){
    if($at8 % 2 == 0){
        echo " $at8";
    }
}
echo "<br/><br/>";

//ATIVIDADE 9
/*
Imprimir todos os anos bissextos de 0 a 2020 e informar quantos anos bissextos foram impressos.
*/
$quantBix = 0;
for($cont9 = 1; $cont9 <= 2020; $cont9++){
    if($cont9 % 4 == 0){
        echo " $cont9";
        $quantBix++;
    }
}
echo "<br/>Quantidade anos Bissextos é: $quantBix";

?>