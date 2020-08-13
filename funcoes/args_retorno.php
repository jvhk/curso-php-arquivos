<div class="titulo">Args Retorno</div>

<?php

function obterMensagem(){
    return 'Seja bem vindo<br>';
}

function obterMensagemComNome($nome){
    return "Seja bem vindo {$nome} <br>";
}

function soma($num1,$num2){
    return $num1+$num2;
}


//Necessário passar o valor que será mudado por referência
function trocaValor(&$valorAntigo, $novoValor){
    $valorAntigo = $novoValor;
}

obterMensagem();

$mens = obterMensagem();

echo $mens;

var_dump(obterMensagem());
echo "<br>";

echo obterMensagemComNome('João');

echo soma(1,2);


$variavel1 = 0;

trocaValor($variavel1, 3);

echo '<br>', $variavel1;