<?php namespace contexto; ?>


<div class="titulo">Básico de namespace</div>

<?php

echo __NAMESPACE__ . '<br>';

const constante1 = 123;

define('contexto\constante2', 234);

define(__NAMESPACE__ . '\constante3', 345);

define('outro_contexto\constante4' , 456 );

echo constante1 . '<br>';
echo constante2 . '<br>';

// Conflito no Conceito de subNAMESPACE:  <? contexto\a\sub\name; 
//echo contexto\constante3 . '<br>';
echo constant(__NAMESPACE__ . '\constate3') . '<br>';

echo \outro_contexto\constante4 . '<br>';


function soma($a,$b){
    return $a+$b;
}

echo \contexto\soma(2,3) . '<br>';
echo soma(4,6) . '<br>';


function strpos($str, $text){
    echo "Buscando o texto '{$text}' em '{$str}'    <br>";
    return 1;
}


echo strpos('Texto generico para busca' , 'busca ') . '<br>';
echo \strpos('Texto generico para busca' , 'busca ') . '<br>';




