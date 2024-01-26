<?php

class Carro{
    public $modelo;
    public $cor,
    $motor,
    $fabricante,
    $ano,
    $combustivel = "Gasolina",
    $portas,
    $velocidade,
    $quilometragem;
    
    public function andar(){
        echo "Andando a {$this->velocidade}";
    }
    public function getVeiculo(){
        echo <<<HTML
        <p>{$this->modelo}</p>
        <p>{$this->cor}</p>
        HTML;
    }
}
?>