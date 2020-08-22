<div class="titulo">Recursividade</div>

<?php

function somaRecursiva($numero){
    if($numero === 1){
        return 1;
    }
    return $numero + somaRecursiva($numero - 1);
}


echo somaRecursiva(10) . '<br>';