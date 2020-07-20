<div class="titulo">Operadores Relacionais</div>

<?php

//Operações relacionais retornam True ou False

var_dump(1 == 1);
var_dump(1 > 1);
var_dump(1 >= 1);
var_dump(1 != 1);
var_dump(1 <> 1);

echo "<br>";

var_dump(1 == '1');
var_dump(1 === '1'); //igualdade estrita, leva o tipo em consideração na comparação
var_dump(1 != '1');
var_dump(1 !== '1');

echo "<hr>";

echo "<br>Relacionais com if else<br>";

$idade = 20;
if($idade < 18){
    echo "Menor";
}else{
    echo "Maior";
}

