<div class="titulo">Operações</div>

<?php

$dados1 = [
    "nome" => "josé",
    "idade" => 28
];

$dados2 = [
    "naturalidade" => "Fortaleza"
];

$dadosCompletos = $dados1 + $dados2;

print_r($dadosCompletos);

echo "<br>" . is_array($dadosCompletos); //retorna se é um array ou não
echo "<br>" . count($dadosCompletos); // retorna o numero de elementos

echo '<br>';

$indice = array_rand($dadosCompletos);

echo "$indice = $dadosCompletos[$indice]";
echo '<br>';
echo "{$dadosCompletos['idade']}";
echo "<br>";
echo " ${dadosCompletos['idade']}";

//Removendo o campo "nome" do array
unset($dadosCompletos["nome"]);
echo "<br>";
print_r($dadosCompletos);

$impares = [1,3,5,7,9];
$pares = [0,2,4,6,8];

$decimais = $pares + $impares;

echo "<br>";
print_r($decimais);

//juntando os dois arrays realmente
$decimais = array_merge($pares,$impares);
echo "<br>";
print_r($decimais);

//ordenando os itens do array
sort($decimais);
echo "<br>";
print_r($decimais);
