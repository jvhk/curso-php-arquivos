<div class="titulo">Função anônima</div>

<?php

$soma = function ($a,$b){
    return $a+$b;
};

echo $soma(1,2) . '<br>';


function executar($a,$b,$operacao,$funcao){
    $resultado = $funcao($a,$b);
    echo "$a $operacao $b = $resultado <br>";
}


executar(2,3,'+',$soma);


$multiplicar = function ($a,$b){
    return $a*$b;
};

executar(2,3,'*',$multiplicar);


//Sem usar variáveis

function dividir($a,$b){
    return $a/$b;
}


//this will throw an Error in a future version of PHP
executar(2,3,'/', dividir);