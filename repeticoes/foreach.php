<div class="titulo">FOR each</div>

<?php


$array = [ 1=> 'Segunda','Terça','Quarta','Quinta','Sexta'];

foreach($array as $dia){
    echo "$dia <br>";
}

echo "<hr>";

foreach($array as $indice => $valor){
    echo "$indice => $valor <br>";
}





$matriz = [
    ['a','e','i','o','u'],
    ['b','c','d']
];


foreach($matriz as $linhas){
    foreach($linhas as $valor){
        echo "$valor";
    }
    echo "<br>";
}

echo "<hr>";



//Alterando por referencia os valores do array
$numeros = [1,2,3,4,5,6];

foreach($numeros as &$dobrar){
    $dobrar *= 2;
    echo "$dobrar <br>";
}

print_r($numeros);