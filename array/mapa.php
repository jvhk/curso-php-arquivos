<div class="titulo">Mapa</div>

<?php

$dados = array(
    "idade" => 25,
    "cor" => "verde",
    "peso" => 49.8
);

//imprimindo o array de chaves:
print_r($dados);

//imprimindo os indices do array baseados nas chaves
echo "<br>" . $dados["idade"];
echo "<br>" . $dados["cor"];
echo "<br>" . $dados["peso"];

echo "<br>";

//Forma não muito indicada de usar arrays map
$lista = array(
    "a",
    "circo" => "b",
    "c"
);

print_r($lista);

//atribuindo ao fim da lista
$lista["vinte"]  = 20;
echo "<br>";
print_r($lista);