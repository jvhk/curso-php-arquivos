<div class="titulo">Args Variaveis</div>

<?php

function soma($a,$b){
    return $a+$b;
}

echo soma(1,2),"<br>";



//varias entradas na função serão entradas como um array
function somaCompleta(...$numeros){
    $soma = 0;
    foreach($numeros as $num){
        $soma +=  $num;
    }
    return $soma;
}


echo somaCompleta(6,7,8,9), "<br>";


function membros($titular, ...$dependentes){
    echo "Titular: $titular <br>";
    if($dependentes){
        foreach($dependentes as $dep){
            echo "Dependentes: $dep <br>";
        }
    }
}

membros("Ana","João","Pedro","Amanda");

echo "<hr>Segunda execução da função Membros apenas com um parâmetro: <hr> <br>";

membros("Roberto");



