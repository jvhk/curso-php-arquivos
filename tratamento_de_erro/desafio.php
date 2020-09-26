<div class="titulo">Desafio</div>

<?php

include_once('desafio_aux.php');

use function \Aritmetica\intdiv;

try{
    echo intdiv(8,3) . '<br>';
}catch (\Aritmetica\NaoInteiroException $e){
    echo "Resultado nao inteiro <br>";
}

try{
    echo intdiv(8,0) . '<br>';
}catch (DivisionByZeroError $e){
    echo "$e->getMessage() <br>";
}

echo intdiv(8,2) . '<br>';
echo \intdiv(8,2) . '<br>';