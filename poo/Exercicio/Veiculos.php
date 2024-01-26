<?php
class Veiculo{
    public $ano, $modelo, $cor, $fabricante, $velocidade;
    public function setInfos($ano = '', $modelo = '', $cor = '', $fabricante = '', $velocidade = ''){
        $this->ano = $ano;
        $this->modelo = $modelo;
        $this->cor = $cor;
        $this->fabricante = $fabricante;
        $this->velocidade = $velocidade;
    }
    public function getInfos(){
        return [$this->ano,
        $this->modelo,
        $this->cor, 
        $this->fabricante,
        $this->velocidade];
    }
}
?>