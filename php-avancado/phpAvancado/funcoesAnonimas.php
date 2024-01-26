<?php
// Exemplo1
$message = "Olá, ";

$funcaoAnonima = function($nome) use ($message){
    echo $message.$nome;
};

$funcaoAnonima("Gian");
echo "<br>";
// Exemplo 2

function criarContador(){
    $contador = 0;
    $funcaoContadora = function() use (&$contador){
        $contador++;
        echo "Contagem: ".$contador."<br>";
    };

    return $funcaoContadora;
}

$contadora = criarContador();
$contadora();

// Exemplo 3

$numeros = [1,2,3,4,5,6,7,8,9,10];

$numeroPares = array_filter($numeros, function($numero){
    return $numero % 2 == 0;
});

$numerosDobrados = array_map(function($numero){
    return $numero * 2;
}, $numeroPares);

echo "<pre>";
print_r($numerosDobrados);
echo "</pre>";

// Exemplo 4

$soma = function($a, $b){
    return $a + $b;
};

echo $soma(44, 22);

echo "<br>";

// Exercício 1
/* FAÇA UM ALGORITIMO PARA CALCULAR MÉDIA DE NOTAS DE ALUNOS CADASTRADOS EM UM ARRAY.
USE CLOSURE PARA CALCULAR AS MEDIAS */
$notas = [10, 9, 7.50];
echo "<pre>";
print_r($notas);
echo "</pre>";

$mediaNotas = function($array){
    return array_sum($array) / count($array);
};

echo $mediaNotas($notas);
?>