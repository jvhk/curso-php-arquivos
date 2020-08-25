<div class="titulo">Retornando função</div>

<?php

function soma($a){
    return function($b) use ($a){
        return $a+$b;
    };
}

echo soma(3)(3);



$doisMais = soma(2);
echo "<br> Soma de 2 + o próximo valor passado na função:";
echo '<br>' . $doisMais(10);