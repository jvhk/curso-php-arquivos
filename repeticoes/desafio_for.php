<div class="titulo">Desafio FOR</div>

<?php

$impress  = '';
for($cont = 1; $cont <=5; $cont++){
    $impress .= '#';
    echo "$impress <br>"; 
}

echo "<hr>";



for($impress2 = '#' ; $impress2 !== '######' ; $impress2 .= '#'){
    echo "$impress2 <br>"; 
}