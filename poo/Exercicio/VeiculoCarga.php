<?php
require "Veiculos.php";
class VeiculoCarga extends Veiculo{
    public $carga, $eixos;

    public function setCarga($carga){
        $this->carga = $carga;
    }
    public function getCarga(){
        return $this->carga;
    }
    public function setEixos($eixos){
        $this->eixos = $eixos;
    }
    public function getEixos(){
        return $this->eixos;
    }
}
?>