<?php
class ContaBancaria{
    public $nome;
    public $numeroConta;
    private $saldo;

    public function __construct($nome, $saldo = 0){
        $this->nome = $nome;
        $this->saldo = $saldo;
        $this->numeroConta = random_int(00001, 99999);
    }

    public function getInfos(){
        echo "
            Nome: {$this->nome} <br>
            Saldo: {$this->saldo} <br>
            Número da Conta: {$this->numeroConta} <br>
        ";
    }

    public function deposito($value){
        if($value > 0){
            $this->saldo += $value;
            return "Deposito realizado no valor de R$ {$value}";
        } else{
            return "Deposite valores maiores que zero!";
        }
    }

    public function saque($value){
        if($this->saldo < $value){
            return "Saldo insuficiente";
        } else{
            $this->saldo -= $value;
            return "Saque realizado no valor de R$ {$value}";
        }
    }

    public function getSaldo(){
        echo $this->saldo;
    }
}

$gian = new ContaBancaria("Gian", 2500);
$gian->getInfos();

$gian->deposito(2500);
$gian->saque(2000);

$gian->getInfos();
?>