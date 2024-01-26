<?php
class Funcionario{
    public $nome;
    protected $salario;
    private $cpf;

    public function getFuncionario(){
        return "
        Nome: {$this->nome} <br>
        CPF: {$this->cpf} <br>
        Salário: {$this->salario} <br>
        ";
    }
    public function setSalario($value){
        $this->salario = $value;
    }

    public function setCPF($value){
        $this->cpf = $value;
    }
}

$gian = new Funcionario();
$gian->nome = "Gian";
$gian->setCPF(10976738988);
$gian->setSalario(2000);
echo $gian->getFuncionario();

$paola = new Funcionario();
$paola->nome = "Paola";
$paola->setCPF(39910542803);
$paola->setSalario(7000);
echo $paola->getFuncionario();
?>