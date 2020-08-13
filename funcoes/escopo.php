<div class="titulo">Escopo</div>

<?php

//Declarando a função
function imprimirMensagem(){
    echo "Olá";
    echo "<br> Até a próxima <br>";
}


//Chamando a função
imprimirMensagem();

imprimirMensagem();


$variavel = 1;

function trocaValor(){
    $variavel = 2; //variavel nova, diferente da variavel fora da função com valor de 1
    echo "Durante a função:$variavel <br>";
}

trocaValor();

echo "Antes da função: $variavel<br>";

trocaValor();

echo "Antes da função: $variavel<br>";


echo "<hr>";

function trocaValorDeVerdade(){
    global $variavel;
    $variavel = 3;
    echo "Durante a função com GLOBAL: $variavel <br>";
}

echo "Antes da função GLOBAL: $variavel<br>";

trocaValorDeVerdade();

echo "Depois da função GLOBAL: $variavel<br>";

var_dump(trocaValorDeVerdade());