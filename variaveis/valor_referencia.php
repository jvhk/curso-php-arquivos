<div class="titulo">Valor referencia</div>

<?php
$variavelA= 'valor inicial';
echo $variavelA;


//Atribuição por valor
$variavelValor = $variavelA;
echo '<br>' . $variavelValor;
$variavelValor = 'novo valor';
echo '<br>' . $variavelValor;


//Atribuição por referencia
$variavelReferencia = &$variavelA;
echo '<br>' . $variavelReferencia;
$variavelReferencia = 'mesma referencia';
echo '<br>' . $variavelReferencia;

echo '<br>' . $variavelA;
