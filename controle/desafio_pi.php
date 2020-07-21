<div class="titulo">Desafio PI</div>

<?php

echo pi();

$pi = 3.14;

if($pi === pi()){
    echo "<br> Iguais";
}else{
    echo "<br> Diferentes";
}

echo "<br>";

if(var_dump($pi) === var_dump(pi())){
    echo "<br> Iguais";
}else{
    echo "<br> Diferentes";
}

$piCerto = round(pi(),2);

echo "<br> $piCerto";

if($pi === $piCerto){
    echo "<br> Iguais";
}else{
    echo "<br> Diferentes";
}
