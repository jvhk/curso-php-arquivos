<div class="titulo">Interpolação</div>

<?php

$num = 10;
echo $num;

echo '<br> $num';
echo "<br> $num + 1";


$texto = "Sua nota é $num";

echo "<br> $texto";

$objeto = 'caneta';

echo "<br> Eu tenho 5 $objeto";
echo "<br> Eu tenho 5 {$objeto}s";
echo "<br> Eu tenho 5 {$objeto}s e perdi {$objeto }s";