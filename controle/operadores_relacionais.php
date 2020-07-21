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


echo "<h1> Parte 2 Operadores Relacionais </h1><hr>";

echo "<p>Spaceship:</p>";

var_dump(100 <=> 1); //retorna 1 se o operando da esquerda for maior que o da direita
var_dump(4 <=> 4); //retorna  0 se os operandos forem iguais
var_dump(4 <=> 10); //retorna -1 caso o operando da direita for maior que o da esquerda

?>



<style>
p{
    margin-bottom: -10px;
}
h1{
    margin-bottom: 0px;
}

</style>