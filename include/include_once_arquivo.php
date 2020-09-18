<?php

echo "Carregando o include_once_arquivo ";

$variavel = "Sou uma variavel do include_once_arquivo";
if(function_exists('soma')){
    function soma($a,$b){
        return $a + $b;
    }
}