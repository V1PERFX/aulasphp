<?php
//falta terminar
class Car{
    private string $modelo = "Sandero";
    private string $cor= "Preta";
    private int $ano = 2014;
    private int $veloMax = 200;
    private int $veloAtual = 0;

    public function acelerar() {
        if($this->veloAtual >= $this->veloMax){
            $this->veloAtual = $this->veloMax;
        } else {
            $this->veloAtual += 10;
        }  
    }

    function exibirVelo() {
        return $this->veloAtual;
    }

    public function freiar() {
        $this->veloAtual = 0;
    }
}

$pessoa = new Car();
echo $pessoa->exibirVelo() . "<br/>";

$pessoa->acelerar();
$pessoa->acelerar();

echo $pessoa->exibirVelo() . "<br/>";

?>