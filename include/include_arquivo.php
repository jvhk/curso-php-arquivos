<?php 
echo "Carregando: include_arquivo<br>";

$variavel = "Estou definida";

//garantindo que a função não será executada se houver outra com o mesmo nome onde o include for submetido
if(!function_exists('soma')){
    function soma($a,$b){
        return $a+$b;
    }
}