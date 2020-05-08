<?php
class Carro{
    private string $modelo, $cor;
    private int $ano, $veloMax, $veloAtual;
    
    function acelerar(int $a) {
        $this->veloAtual = $a += 10;
    }

    function exibirVelo() {
        return $this->veloAtual;
    }

    function acidente(){
        $this->veloMax = 150;
        
    }
}

$pessoa = new Carro();
$pessoa->acelerar(85);
echo "O carro  acelerou e a velocidade atual é : {$pessoa->exibirVelo()}km/h" . "<br />";
echo "--------------<br />";

?>