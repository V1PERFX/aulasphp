<?php
//exemplo
abstract class Pessoa {
    public $nome;
    public $endereco;

    public function exibe() {

    }

    public static function qtdDePessoa() {
        echo "Quantidade de pessoas";
    }
}

class Pessoa_Fisica extends Pessoa {
    public $cpf;
}

class Pessoa_Juridica extends Pessoa {
    public $cnpj;
}

$pessoa = new Pessoa_Fisica();
$empresa = new Pessoa_Juridica();



$pessoa->nome;
$pessoa->cpf;
$pessoa->exibe();
$empresa->nome;
$empresa->cnpj;

Pessoa::qtdDePessoa();

?>