<?php

function novaConexao($banco = 'primeiro_banco'){
    $servidor = '127.0.0.1';
    $usuario = 'root';
    $senha = 'root';


    try{
        $conexao = new PDO("mysql:host=$servidor;dbname=$banco", $usuario, $senha);
        return $conexao;
    }catch(PDOException $e){
        die('Erro: '. $e->getMessage());
    }
}

novaConexao();
//echo "Fim",'<br>';