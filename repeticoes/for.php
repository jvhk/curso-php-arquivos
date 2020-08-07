<div class="titulo">Laço FOR</div>

<?php

//Laço FOR de 1 a 5
for($cont = 1; $cont <=5; $cont++){
    echo "$cont <br>";
}

echo "<hr>";

for(; $cont <= 10; $cont++){
    echo "$cont <br>";
}

echo "<hr>";

for(; $cont <= 15; ){
    echo "$cont <br>";
    $cont++;
}

$array = ['Segunda','Terça','Quarta','Quinta','Sexta'];

echo "<br>";
echo "<hr>";

for($i = 0; $i<count($array); $i++ ){
    echo "{$array[$i]} <br>";
}

echo "<hr>";

$matriz = [
    ['a','e','i','o','u'],
    ['b','c','d']
];

print_r($matriz);

echo "<hr>";

for($i = 0; $i<count($matriz); $i++ ){
    for($j = 0; $j<count($matriz[$i]); $j++ ){
    echo "{$matriz[$i][$j]}";
    }
    echo "<br>";
}