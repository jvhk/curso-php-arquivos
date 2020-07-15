<div class="titulo">Atribuições</div>

<?php

$title = "Atribuições";

$numero = 10;
echo '<br>' . $numero;

$numero = $numero -1;

echo '<br>' . $numero;

$numero = $numero + 1.2;

echo '<br>' . $numero;

//decrementando 1
$numero--;
echo '<br>' . $numero;
--$numero;
echo '<br>' . $numero;
//incrementando 1
$numero++;
echo '<br>' . $numero;
++$numero;
echo '<br>' . $numero;

//Decrementando 5 unidades do valor atual na variavel
$numero-=5;
echo '<br>' . $numero;

//Incrementando 5 no valor atual da variavel
$numero+=5;
echo '<br>' . $numero;

//Multiplicando o valor da variavel por 2
$numero*=2;
echo '<br>' . $numero;

//Dividindo
$numero/=2;
echo '<br>' . $numero;

//Modulo
$numero %= 2;
echo '<br>' . $numero;

//Exponenciação
$numero **= 2;
echo '<br>' . $numero;


$texto = 'Isso é um texto';
echo '<br>' . $texto;
$texto = $texto . ' qualquer';
echo '<br>' . $texto;

$texto .= ' de verdade';
echo '<br>' . $texto;


$variavelAux = 'valor existente';
echo '<br>' . $variavelAux;
$valor = $variavelAux ?? 'valor default';
echo '<br>' . $valor;