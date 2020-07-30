<div class="titulo">Básico</div>

<?php
$lista = array(1,2,3.5,"texto");

echo $lista . "<br>";

var_dump($lista);

echo "<br>";

print_r($lista);

$lista[0] = "minino";

//Retornando o primeiro elemento do array
echo "<br>" . $lista[0];
echo "<br>" . $lista[1];
echo "<br>" . $lista[2];
echo "<br>" . $lista[3];

$texto = 'Esse texto é uma string';
echo "<br>" . $texto[0]; //retorna a primeira letra da string
echo "<br>" . $texto[1]; //retorna a segunda letra da string

//echo "<br>" . mb_substr($texto, 5, 1);