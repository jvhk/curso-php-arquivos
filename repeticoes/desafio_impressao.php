<div class="titulo">Desafio</div>

<?php

//IMPRIMIR OS VALORES DO ARRAY QUE CONTÉM INDICE PAR


$array = [
    "AAA",
    "BBB",
    "CCC",
    "DDD",
    "EEE",
    "FFF"
];


foreach($array as $index => $valor){
    if($index % 2 === 0){
        echo "{$array[$index]} <br>";
    }
}

for($i = 0; $i < count($array); $i++){
    if($i % 2 == 0){
        echo "{$array[$i]} <br>";
    }
}