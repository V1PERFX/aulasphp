<?php
abstract class Animal {
    private float $tamanho;
    private string $cor;

    public function __construct($tamanho, $cor){
        $this->tamanho = $tamanho;
        $this->cor = $cor;
    }

    public function comer(){
        echo "Comeu";
    }

    //funções criada só para demonstração
    public function tamanho() {
        return $this->tamanho;
    }
    public function cor() {
        return $this->cor;
    }
}

class Cavalo extends Animal {
    private string $raca;

    public function __construct($tamanho, $cor, $raca){
        parent::__construct($tamanho, $cor);
        $this->raca = $raca;
    }

    public function fugir(){
        //programar ação
    }

    //função criada só para demonstração
    public function raca() {
        return $this->raca;
    }
}

class Leao extends Animal {
    private bool $juba;

    public function __construct($tamanho, $cor, $juba) {
        parent::__construct($tamanho, $cor);
        $this->juba = $juba;
    }

    public function cacar() {
        if($this->juba == true){
            echo "O Leão tem juba e está caçando";
        } else {
            echo "O Leão não tem juba e não está caçando";
        }
    }

    //função criada só para demonstração
    public function juba() {
        return $this->juba;
    }
}

$cavalo = new Cavalo(1.70, "Branco", "Qualquer");
$leao = new Leao(1.3, "Marrom", true);

//echo para teste - var_dump($cavalo); ou var_dump($leao);
echo "O tamanho do Cavalo é: " . $cavalo->tamanho() . "m" . "<br/>";
echo "A cor do Cavalo é: " . $cavalo->cor() . "<br/>";
echo "A raça do Cavalo é: " . $cavalo->raca() . "<br/>";
echo "---------------- <br/>";
echo "O Leão tem juba?(1:sim)(0:não): " . $leao->juba() . "<br/>";
echo "O tamanho do Leão é: " . $leao->tamanho() . "m" . "<br/>";
echo "A cor do Leão é: " . $leao->cor() . "<br/>";
echo $leao->cacar() . "<br/>";
?>