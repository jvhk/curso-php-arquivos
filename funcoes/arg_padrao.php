<div class="titulo">Arg padrão</div>

<?php

function saudacao($nome = "Senhor",$sobrenome = "Cliente"){
    echo "Bem vindo $nome $sobrenome! <br> ";
}

echo saudacao();
echo saudacao(NULL);
echo saudacao(NULL,NULL);
echo saudacao("JOÃO", "VITOR");

function anotarPedido($comida,$bebida = "Água"){
    echo "Para comer: $comida <br>";
    echo "Para beber: $bebida <br>";
}

echo anotarPedido('Tapioca');
echo anotarPedido(NULL);    