<div class="titulo">WHILE e DO WHILE</div>

<?php
const VALOR_LIMITE = 5;
$cont = 0;

while($cont < VALOR_LIMITE){
    echo "while $cont <br>";
    $cont++;
}

echo "<hr>";

$cont = 10;

do{
    echo "do while $cont <br>";
    $cont--;
}while($cont > VALOR_LIMITE);