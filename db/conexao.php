<?php

function novaConexao($banco = "primeiro_banco"){
    $servidor = '127.0.0.1';
    $usuario = 'root';
    $senha = 'root';

    $conexao = new mysqli($servidor,$usuario,$senha);
    if($conexao->connect_error){
        die('Erro: ' . $conexao->connect_error);
    }

    return $conexao;
}

