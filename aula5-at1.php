<?php
class Calculadora {
    public static function adicao($valor1, $valor2){
        return $valor1 + $valor2;
    }

    public static function subtracao($valor1, $valor2){
        return $valor1 - $valor2;
    }

    public static function multiplicacao($valor1, $valor2){
        return $valor1 * $valor2;
    }

    public static function divisao($valor1, $valor2){
        return $valor1 / $valor2;
    }
}

echo Calculadora::adicao(5, 8) . "<br/>";
echo Calculadora::subtracao(5, 8) . "<br/>";
echo Calculadora::multiplicacao(5, 8) . "<br/>";
echo Calculadora::divisao(8, 2) . "<br/>";



?>