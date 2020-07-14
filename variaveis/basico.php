<div class="titulo">Variáveis</div>

<?php

$numeroA = 13;
echo $numeroA;


echo '<br>';
var_dump($numeroA);

echo '<br>';
//Operações aritméticas
$a = 3; //atribuição
$b = 16;
$soma = $a + $b;
echo $soma;

echo '<br>';
echo isset($soma);

echo '<br>';
unset($soma);
echo isset($soma);

$variavel = 10;
echo '<br>' . $variavel;

$variavel = "Agora sou uma string";
echo '<br>' . $variavel;



#Nomes de variáveis:

$var = 'valida';
$var2 = 'valida';
$VAR3 = 'valida';
$_var_4 = 'valida';
$vâr5 = 'valida'; //mas não é uma boa prática
//  $6var = 'invalida';
//  $%var = 'invalida;
//  $var8% = 'invalida';


#Nomes de variáveis pré-definidas:

echo '<br>' ;
var_dump($_SERVER["HTTP_HOST"]);

