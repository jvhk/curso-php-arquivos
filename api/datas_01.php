<div class="titulo">Datas 01</div>
<?php
echo time() . "<br>";
echo date('D,d \d\e M \d\e Y') . "<br>"; //Dia "de" "Mês" de "Ano

echo strftime('%A, %d de %B de %Y', time()) . "<br>";  //data em formato de string

setlocale(LC_TIME,'pt-BR','pt-BR.utf-8');

echo strftime('%A, %d de %B de %Y', time()) . "<br>";

$amanha = time() + (24*60*60);
echo strftime('%A, %d de %B de %Y', $amanha) . "<br>";

$proximaSemana = strtotime("+1 week");
echo strftime('%A, %d de %B de %Y', $proximaSemana) . "<br>";

$dataFixa = mktime(15,30,50,4,10,2020);
echo strftime('%A, %d de %B de %Y', $dataFixa) . "<br>";