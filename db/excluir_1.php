<div class="titulo">Excluir registro</div>

<?php
require_once "conexao.php";

$sql = 'DELETE FROM cadastro WHERE id = 1';

$conexao = novaConexao();
mysqli_select_db($conexao,"primeiro_banco");
$resultado = $conexao->query($sql);

if($resultado){
    echo "Sucesso na exclusão!";
}else{
    echo "Erro: " . $conexao->error;
}

$conexao->close();