<?php
    /*
    PROGRAMAÇÃO BACK-END
    APRESENTAÇÃO DA LINGUAGUEM
    AULA 1 - 13/03/2020
	*/
	
/*
//FRONT-END
Todo código da aplicação responsavel pela apresentação do software.(client-side)
Codigo roda direto no browser.
Tabalha com liguagem HTML, CSS e JAVASCRIPT.

//BACK-END
Software roda em um servidor.(server-side)
Responsavel por toda regra de negócio acesso a banco de dados e segunrça.
Linguagem que trabalha com servidor PHP, JAVA, C#, RUBY...

//FULL-STACK
Tabalha tanto em "FRONT-END" e "BACK-END".

//Linguagem PHP
Acronimo de Hyper Text Preprocessor linguagem de Script Open Source,
adequada para desenvolvimento web e que pode embutida no HTML.


Iniciar o PHP - <?php "codigo aqui" ?>
Criar variável - "$"   ex. $nome
Imprimir resultado - ECHO
Operadores Aritméticos(
+ adição,
- subtração,
* multiplicação,
/ divisão,
% modulação
);
*/


//média de 3 numeros
$n1 = 8.6;
$n2 = 10;
$n3 = 9.2;
$media = ($n1 + $n2 + $n3) / 3;

$nome = "Rafael ";
$sobreNome = "Fiuza";

$nome .= $sobreNome;

echo "Meu nome é: " . "<br>" . $nome . "<br>" . 
	"Minha Média é: " . "<br>" . $media . "<br> <br>";


//cobnverter dolar em real
$dolar = 19.90;
$cotacaoAtual = 4.85;

$real = $dolar * $cotacaoAtual;

echo "Valor em R$: " . $real . "<br> <br>";


//converter idade em dias
$idade = 27;
$dias = 365;

$resultado = $idade * $dias;

echo "Dias: " . $resultado . "<br> <br>";


//converter graus celsius em graus fahrenheit
$celsius = 22;

$result = ($celsius * 9/5) + 32;

echo "Fahrenheit: " . $result . "<br> <br>";


//descobrir % de votos de 2 candidatos informando quantidade de votos
$a = 35;
$b = 56;

$total = $a + $b;

$resulta = ($a * 100) / $total;

echo $resulta;
?>