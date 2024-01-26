<?php

require "Animais.php";

class Felinos extends Animais{
    public $som, $porte, $tipo;

    public function som(){
        return $this->som;
    }

    public function detalhes(){
        return "Porte: {$this->porte} <br> Tipo: {$this->tipo}";
    }
}

$f = new Felinos();
$f->nome = "Luxana";
$f->idade = 7;
$f->especie = "Gato";
$f->som = "Mia";
$f->porte = "Pequeno";
$f->tipo = "Doméstico";

echo "{$f->getEspecie()} <br> {$f->detalhes()} <br> Som: {$f->som()}";

$leao = new Felinos();
$leao->nome = "Aslan";
$leao->idade = 22;
$leao->especie = "Leão";
$leao->som = "Ruge";
$leao->porte = "Grande";
$leao->tipo = "Selvagem";

echo "{$leao->getEspecie()} <br> {$leao->detalhes()} <br> Som: {$leao->som()}";

?>