<?php
// require "Carros.php";
// require "Pessoa.php";
require "Autoload.php";

$meucarro = new Carro();
$meucarro->modelo = "Não tenho ainda.";
$meucarro->cor = "transparente";
$meucarro->getVeiculo();

//classe pessoa
$p1 = new Pessoa("Gian", 24);
$p1->getPessoa();

?>