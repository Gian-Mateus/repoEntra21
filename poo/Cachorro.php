<?php

require_once('Animais.php');

class Cachorro extends Animais{
    public $som;
    public function som(){
        return $this->som;
    }
}

$cachorro = new Cachorro();
$cachorro->nome = "Doguinho 1";
$cachorro->idade = 15;
$cachorro->especie = "dog";
$cachorro->som = "Late";

echo "O {$cachorro->getEspecie()} {$cachorro->som()}"
?>