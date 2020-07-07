<div class="titulo">Aritméticas</div>

<?php

echo 1 + 1,'<br>';
var_dump(1 + 1);
echo '<br>';
echo 10 - 2,'<br>';
echo 2 * 5,'<br>';
echo 7 / 4,'<br>';

#função que retorna o resultado em inteiro
echo intdiv(7,4);
echo '<br>';

#função de arredondamento de valor 
echo round(7/4), '<br>';

#módulo de uma divisão
echo 7%4,'<br>';

#divisão por zero
echo 7 / 0,'<br>';

#exponenciação
echo 7**2,'<br>';


#Precedência de operadores
# () => ** => / * % => + -
echo '<p> Precedencia </p>';
echo 1 + 2 * 3,'<br>';
echo (1 + 2) * 3,'<br>';
