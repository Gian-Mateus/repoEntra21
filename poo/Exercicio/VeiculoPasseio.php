<?php
require "Veiculos.php";
class VeiculoPasseio extends Veiculo{
    public $passageiros;

    public function setPassageiros($passageiros){
        $this->passageiros = $passageiros;
    }
    public function getPassageiros(){
        return $this->passageiros;
    }
}
?>