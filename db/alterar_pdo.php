<div class="titulo">PDO: ALTERAR</div>

<?php
require_once "conexao_pdo.php";

$sql = "UPDATE cadastro
SET 
    nome = ?,
    nascimento = ?,
    email = ?,
    site = ?,
    filhos = ?,
    salario = ?
WHERE id = ? ";

$conexao = novaConexao();
$stmt = $conexao->prepare($sql);

$resultado = $stmt->execute([
    'Gui',
    '1980-12-12',
    'gui@gui.com.br',
    'http://gui.com.br',
    1,
    12000,
    5
]);


if($resultado){
    echo "Sucesso ao realizar o UPDATE <br>"; 
}else{
    print_r($stmt->errorInfo());
}
