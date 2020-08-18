<div class="titulo">Declarando tipos</div>

<?php

function somar1($a,$b){
    echo "<span> Somando $a + $b = </span>";
    return $a+$b;
}

echo somar1(1,2) . '<br>';
echo somar1(1.7,2.5) . '<br>';

echo somar1(1,'4dois') . '<br>';


#Restringindo os tipos
function somar2(int $a, int $b){
    echo "<span> Somando $a + $b = </span>";
    return $a+$b;
}

echo somar2(1,2) . '<br>';

#PHP IRÁ TRUNCAR OS VALORES E SOMAR APENAS A PARTE INTEIRA
echo somar2(1.7,2.5) . '<br>';

echo somar2(1,'4dois') . '<br>';



#Somente a resposta será convertida em int, os parametros serao utilizados da forma que forem passados
function somar3($a,$b): int{
    echo "<span> Somando $a + $b = </span>";
    return $a+$b;
}

echo somar3(1,2) . '<br>';
echo somar3(1.7,2.5) . '<br>';
echo somar3(1,'4dois') . '<br>';