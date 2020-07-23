<div class="titulo">Operadores Lógicos</div>

<?php

var_dump(true);
echo "<br>";
var_dump(!true);
echo "<br>";
var_dump(!!true); //negação da negação

echo "<p>Tabela verdade do AND</p>";
var_dump(true && true); //and
echo "<br>";
var_dump(true && false);
echo "<br>";
var_dump(false && false);
echo "<br>";



echo "<br>";
var_dump(true && 3>2 && 2==2);

echo "<br>";
var_dump(true && false);



echo "<p>Tabela verdade do OR</p>";
var_dump(true || true); //or
echo "<br>";
var_dump(true || false);
echo "<br>";
var_dump(false || false);
echo "<br>";

echo "<p>Tabela verdade do XOR (ou exclusivo)</p>";
var_dump(true xor true); // XOR
echo "<br>";
var_dump(true xor false);
echo "<br>";
var_dump(false xor false);
echo "<br>";