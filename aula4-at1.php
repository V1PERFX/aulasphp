<?php
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

?>