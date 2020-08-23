<div class="titulo">Busca Recursiva</div>

<?php

$array1 = [1,2,[3,4,5],6,[7,[8,9]],10];


//o caso base é o menor nível '>'   
function sortArray($array, $nivel = '>'){
    foreach($array as $elemento){
        if(is_array($elemento)){
            sortArray($elemento, $nivel . $nivel[0]);
        }else{
            echo "$nivel $elemento <br>";
        }
    }
}

sortArray($array1);