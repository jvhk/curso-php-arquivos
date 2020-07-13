<div class="titulo">Conversões</div>

<?php

echo is_int(PHP_INT_MAX);

//Convertendo de int para float:
echo '<br>';

var_dump(PHP_INT_MAX + 1);

echo '<br>';
var_dump(1+1.0);


//inteiro para float
echo '<br>';
var_dump((float)3);

//float para int(não muito indicado):
echo '<p> Float convertido para int </p>';
var_dump((int)6.8);


//truncando a função a partir da base que você quer :
echo '<br>';
var_dump(intval(2.8,10)); 

echo '<br>';
var_dump((int)round(2.8));


//conversões com strings:
echo '<p>Conversões com string</p>';
var_dump(3+"2");    //retornaram int(5)

echo '<br>';
var_dump("3"+2);

echo '<br>';
var_dump("3" . 2); //concatena para string(32)
echo '<br>',is_string("3" . 2);

echo '<br>',is_string("3" + 2);
echo '<br>';

echo '<br>';
var_dump(1+"cinco"); //warning e ignora a parte que não faz sentido "cinco"

echo '<br>';
var_dump(1+"5 cinco"); //interpreta o 5 e ignora a parte de texto "cinco"

echo '<br>';
var_dump(1+ "cinco 5"); //ignora até o 5 depois da string

echo '<br>';
var_dump(1+ "2+5"); //interpreta até onde tem numero na string, no caso até o 2

echo '<br>';
var_dump(1+ "3.2");

echo '<br>';
var_dump(1+"-3.2e2");

echo '<br>';
var_dump((int) "10.5");

echo '<br>';
var_dump((float)"10.5");

