<?php
abstract class Veiculo {
    protected $cor;
    protected $chassi;
    protected $placa;

    public function __construct($chassi, $placa){
        $this->chassi = $chassi;
        $this->placa = $placa;
    }

    public function emitirGuiaSeguro(){
        echo "guia";
    }

}

class Carro extends Veiculo {
    private $qtdPortas;

    public function __construct($chassi, $placa, $portas){
        parent::__construct($chassi, $placa);
        $this->qtdPortas = $portas;
    }

    public function exibiPortas(){
        return $this->qtdPortas;
    }
}

class Moto extends Veiculo {
    private $qtdPortas;
}

$xre = new Moto("as2as1s2", "aaa2222");
$fusca = new Carro("asd4as", "aa444", 4);


echo $fusca->exibiPortas();
?>