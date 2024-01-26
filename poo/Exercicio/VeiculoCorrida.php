<?php
require "Veiculos.php";
class VeiculoCorrida extends Veiculo{
    public $potencia;

    public function setPotencia($potencia){
        $this->potencia = $potencia;
    }
    public function getPotencia(){
        return $this->potencia;
    }
}
?>