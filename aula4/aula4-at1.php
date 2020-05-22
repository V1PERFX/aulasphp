<?php
//MODO 1
class Proprietario {
    public string $nome, $rua, $bairro, $cidade, $estado, $complemento, $nasci,
        $cpf, $rg, $cep;


    function exibeDados($a, $b, $c, $d, $e, $f, $g, $h, $i, $j){
        $this->nome = $a;
        $this->rua = $b;
        $this->bairro = $c;
        $this->cidade = $d;
        $this->estado = $e;
        $this->complemento = $f;
        $this->nasci = $g;
        $this->cpf = $h;
        $this->rg = $i;
        $this->cep = $j;
    }

}
$pessoa = new Proprietario();
$pessoa->exibeDados(
    "Nome", "Rua", "Bairro", "Cidade", "Estado", "Complemento", "Nascimento",
    "123.123.123-12", "123.123.123-1", "12345-123"
);

echo $pessoa->nome . "<br/>";
echo $pessoa->rua . "<br/>";
echo $pessoa->bairro . "<br/>";
echo $pessoa->cidade . "<br/>";
echo $pessoa->estado . "<br/>";
echo $pessoa->complemento . "<br/>";
echo $pessoa->nasci . "<br/>";
echo $pessoa->cpf . "<br/>";
echo $pessoa->rg . "<br/>";
echo $pessoa->cep . "<br/>";
echo "--------------<br/><br/>";


// MODO 2
class Prop {
    private string $nome2 = "Rafael";
    private string $cpf2 = "2123465460";
    private string $rg2 = "13212123";
    private string $nasci2 = "25/50/2020";
    private string $rua2 = "rua";
    private string $bairro2 = "bairro";
    private string $cidade2 = "sao paulo";
    private string $estado2 = "sp";
    private string $cep2 = "21321321";
    private string $complemento2 = "casa";

    public function exibeDados2(){
        echo "Nome: {$this->nome2}" . "<br />" .
        "CPF: {$this->cpf2}" . "<br />" .
        "RG: {$this->rg2}" . "<br />" .
        "Data de Nascimento: {$this->nasci2}" . "<br />" .
        "Rua: {$this->rua2}" . "<br />" .
        "Bairro: {$this->bairro2}" . "<br />" .
        "Cidade: {$this->cidade2}" . "<br />" .
        "Estado: {$this->estado2}" . "<br />" .
        "CEP: {$this->cep2}" . "<br />" .
        "Complemento: {$this->complemento2}" . "<br />";
    }
    
}

$pessoa2 = new Prop();
$pessoa2->exibeDados2();

?>