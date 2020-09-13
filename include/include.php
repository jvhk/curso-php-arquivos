<div class="titulo">Include</div>

<?php

echo "Executei a primeira linha do arquivo include.php <br>";
include('include_arquivo.php');

echo soma(3,10) . "<br>";
echo "O conteudo da variavel definida no arquivo include é: {$variavel}";