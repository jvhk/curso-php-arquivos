<div class="titulo">Include função</div>

<?php
echo "Arquivo include_funcao carregado! <br>";

function carregaArquivo(){
    include("include_arquivo.php");

    echo $variavel . "<br>";
    echo soma(2,5) . "<br>";
}

echo "Novamente no arquivo inlcude_funcao<br>";
//echo soma(1,8) . "<br>";    
carregaArquivo();
echo soma(1,8) . "<br>";

echo "Variavel nova: {$variavel}<br>";
//var_dump($variavel);