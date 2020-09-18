<div class="titulo">Include Once</div>

<?php
ini_set("display_erros",1);

include("include_once_arquivo.php");
//require("include_once_arquivo.php");

echo "Variavel = {$variavel} <br>";
$variavel = "Variavel alterada no include_once";
echo "Variavel = {$variavel} <br>";


include("include_once_arquivo.php");

echo "Variavel = {$variavel} <br>";
$variavel = "Variavel alterada antes do include_once()";


include_once("include_once_arquivo.php");
echo "Variavel após o include_once() = {$variavel} <br>";


require_once("include_once_arquivo.php");
echo "Variavel após o require_once() = {$variavel} <br>";