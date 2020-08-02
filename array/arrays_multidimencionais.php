<div class="titulo">Arrays Multidimencionais</div>

<?php

$dados = [
    [
        "nome" => "João",
        "idade" => 24,
        "naturalidade" => "São Paulo"
    ],
    [
        "nome" => "Carlos",
        "idade" => 20,
        "naturalidade" => "Rio de Janeiro"
    ],
];

print_r($dados);

echo "<br>" . $dados[0]['idade'];
echo "<br>" . $dados[1]['idade'];

$dados[] = [
    "nome" => "Florinda",
    "idade" => 18,
    "naturalidade" => "Nova Iorque"
];

echo "<br>";

print_r($dados);

$dados[2]["Vizinhos"] = "José";
echo "<br>";
print_r($dados[2]);


unset($dados[1]);
echo "<br>";
print_r($dados);
