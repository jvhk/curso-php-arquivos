<div class="titulo">Operador Ternario</div>

<?php

$idade = 70;
$status;

if($idade >= 18){
    $status = "maior de idade";
}else{
    $status = "menor de idade";
}

echo "$status<br>";

//Operador ternario
$status = $idade >= 18 ? "Maior de idade" : "Menor de idade";

echo "$status<br>";

//usando um operador ternário dentro do outro removido no php 7.4: 
//  $status = $idade >= 18 ? $idade >= 65 ? "Aposentado" : "Maior de idade" : "Menor de idade";