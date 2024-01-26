<?php
if(is_dir(__DIR__."/../teste/")){
    echo "o diretório exite";
} else {
    echo "não temos esse diretório";
    // Cria o diretório
    mkdir(__DIR__."/../teste/", 0775);

}
// Remove o diretório
$diretorio = __DIR__."/../arquivos/"; 
$arquivos = scandir($diretorio);
foreach($arquivos as $arquivo){
    if($aruivo !== "." && $arquivo !== ".."){
        // deleta um arquivo
        unlink($diretorio."/".$arquivo);
    };
};
rmdir($diretorio);

?>