<?php
/* $arquivo = 'hello.txt';
// abrir ou criar o arquivo
$handle = fopen($arquivo, "a");

if($handle){
    // escrever algo no arquivo
    fwrite($handle, "Olá mundo! 2".PHP_EOL);
    fclose($handle);
}

$conteudo = file_get_contents($arquivo);
echo $conteudo; */

// gerar um arquivo com lista de pessoas
$dados = [
    "Maria", "João", "José", "Sauro", "Jonas"
];

$arquivo = 'pessoas.txt';
$path = __DIR__.'/arquivos';
$handle = fopen($path.$arquivo, 'w');

if($handle){
    foreach($dados as $ln){
        fwrite($handle, $ln.PHP_EOL);
    }
    fclose($handle);
}

// ler o arquivo
$handle = fopen($path.$arquivo, 'r');
while(!feof($handle)){
    echo fgets($handle)."<br>";
}
?>