<div class="titulo">String</div>

<?php
echo 'Eu sou uma string';
echo '<br>';
var_dump("Eu também");
echo '<br>';

#concatenação
echo "nós também " . ' somos';
echo '<br>';

echo "'Teste com aspas simples'";
echo '<br>';
echo '"Teste com aspas duplas"';
echo '<br>';

print("Também existe o método print <br>");


#Funções para strings:
echo '<br>' . strtoupper("letras maiusculas");
echo '<br>' . strtolower("LETRAS MINUSCULAS");
echo '<br>' . ucfirst("primeira letra maiuscula");
echo '<br>' . ucwords("primeira letra de cada palavra maiuscula");
echo '<br>' . strlen("quantas letra possui a palavra");
echo '<br>' . mb_strlen("Eu também");
echo '<br>' . substr("Só uma parte",7,6);
echo '<br>' . str_replace("isso","aquilo","trocar isso por aquilo");
