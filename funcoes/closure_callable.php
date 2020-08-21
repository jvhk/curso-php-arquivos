<div class="titulo">Closure Callable</div>

<?php

$soma1 = function($a,$b){
    return $a+$b;
};

function soma2($a,$b){
    return $a+$b;
}

var_dump($soma1) . "<br>";

echo $soma1(1,3) . '<br>';

echo (is_callable($soma1) ? 'Sim' : 'Não') . '<br>';

$soma1 = 1;

echo (is_callable($soma1) ? 'Sim' : 'Não') . '<br>';

#this will throw an Error in a future version of PHP) but now works
echo (is_callable(soma2) ? 'Sim' : 'Não') . '<br>';
