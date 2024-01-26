<?php
class Classe{
    public $propPublica = "publico";
    public $env;
    private $version;
    private $propPrivada;
    protected $propProtegida = "protegido";

    function __construct($version){
        $this->env = env;
    }

    public function metodoPublico(){
        echo $this-> propPublica;
    }

    private function metodoPrivado(){
        echo $this->propPrivada;
    }

    protected function metodoProtegido(){
        echo $this->propProtegida;
    }

    public function getProtegido(){
        echo $this->metodoProtegido();
    }
    public function setProtegido($value){
        $this->propProtegida = $value;
    }
}
const env = "local";
$teste = new Classe("2.0");
$teste->propPublica = "Esta propriedade é pública";
$teste->getProtegido();
$teste->setProtegido("tem certeza que é protegido?");
$teste->getProtegido();
?>