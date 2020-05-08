<?php
// ATIVIDADE 2
class ContaBancaria{

    // Atributos
    public string $nomeDoTitular;
    private float $saldo = 0;

    // Métodos
    function exibeSaldo():float {
        return $this->saldo;
    }

    function deposita(float $valor):void {
        $this->saldo += $valor;
    }

    function saque(float $valor):void {
       if($valor > $this->saldo){
           echo "Você nao tem saldo";
       }else{
        $this->saldo -= $valor;
       }
    }

    function transfere(ContaBancaria $conta, float $valor):void {
        $this->saque($valor);
        $conta->deposita($valor);
    }

}

$cbanA = new ContaBancaria();
$cbanB = new ContaBancaria();
$cbanA->nomeDoTitular = "Rafael";
$cbanB->nomeDoTitular = "Raquel";

echo "{$cbanA->nomeDoTitular}, seu saldo da conta é R$: <b>{$cbanA->exibeSaldo()}</b>" . "<br />";
echo "{$cbanB->nomeDoTitular}, seu saldo da conta é R$: <b>{$cbanB->exibeSaldo()}</b>" . "<br />";
echo "----------------<br />";

$cbanA->deposita(1200);
$cbanB->deposita(600);
echo "{$cbanA->nomeDoTitular}, você fez um deposito e seu saldo atual é R$: <b>{$cbanA->exibeSaldo()}</b>" . "<br />";
echo "{$cbanB->nomeDoTitular}, você fez um deposito e seu saldo atual é R$: <b>{$cbanB->exibeSaldo()}</b>" . "<br />";
echo "----------------<br />";

$cbanA->saque(200);
echo "{$cbanA->nomeDoTitular}, você fez um saque e seu saldo atual é R$: <b>{$cbanA->exibeSaldo()}</b>" . "<br />";
echo "----------------<br />";

$cbanA->transfere($cbanB, 500);
echo "{$cbanA->nomeDoTitular}, você fez uma transferência e seu saldo atual é R$: <b>{$cbanA->exibeSaldo()}</b>" . "<br />";
echo "{$cbanB->nomeDoTitular}, você recebeu uma transferência e seu saldo atual é R$: <b>{$cbanB->exibeSaldo()}</b>" . "<br />";

?>