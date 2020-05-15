<?php
abstract class Cliente {
    private string $nome;
    private string $endereco;
    private string $cidade;
    private string $uf;
    private int $cep;

    public function __construct($nome, $endereco, $cidade, $uf, $cep){
        $this->nome = $nome;
        $this->endereco = $endereco;
        $this->cidade = $cidade;
        $this->uf = $uf;
        $this->cep = $cep;
    }

    public function IcluirNovoCliente() {
        //programar
    }

    public function AtualizarCliente() {
        //programar
    }
}

class PessoaFisica extends Cliente {
    private int $cpf;
    private int $rg;
    private string $sexo;
    private string $dataNascimento;

    public function __construct($nome, $endereco, $cidade, $uf, $cep, $cpf,
        $rg, $sexo, $dataNascimento){
        parent::__construct($nome, $endereco, $cidade, $uf, $cep);
        $this->cpf = $cpf;
        $this->rg = $rg;
        $this->sexo = $sexo;
        $this->dataNascimento = $dataNascimento;
    }

    public function ValidarCPF() {
        //programar
    }
    
}

class PessoaJuridica extends Cliente {
    private int $cnpj;
    private string $inscricaoEstadual;
    private string $razaoSocial;

    public function __construct($nome, $endereco, $cidade, $uf, $cep, $cnpj,
    $inscricaoEstadual, $razaoSocial){
    parent::__construct($nome, $endereco, $cidade, $uf, $cep);
    $this->cnpj = $cnpj;
    $this->inscricaoEstadual = $inscricaoEstadual;
    $this->razaoSocial = $razaoSocial;
}

    public function ValidarCNPJ() {
        //programar
    }

}

$pessoa = new PessoaFisica("Rafael", "Sabia das Paineiras", "São Paulo", "SP", 4851480, 12345678912, 1234567891, "M", "16/04/1992");
$empresa = new PessoaJuridica("viperfx", "Sabia das Paineiras", "São Paulo", "SP", 4851480, 123456789, "Inscrição", "viper LTDA.");
?>