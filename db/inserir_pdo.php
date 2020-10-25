<div class="titulo">PDO INSERIR</div>
<?php

require_once "conexao_pdo.php";

$sql = "INSERT INTO cadastro 
(nome,email,nascimento,site,filhos,salario)
VALUES (
    'Guilherme',
    'gui@email.com',
    '1998-7-21',
    'http://gui.com.br',
    0,
    3000
)";


$conexao = novaConexao();
//print_r(get_class_methods($conexao));

if($conexao->exec($sql)){
    $id = $conexao->lastInsertId();
    echo "Novo cadastro com ID $id";
}else{
    echo $conexao->errorCode() . '<br>';
    print_r($conexao->errorInfo());
}

$conexao = null;    //fecha conexao