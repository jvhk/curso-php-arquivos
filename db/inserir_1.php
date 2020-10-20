<div class="titulo">Inserir registro 01</div>

<?php
require_once "conexao.php";

$sql = "INSERT INTO cadastro 
    (nome, nascimento, email, site, filhos, salario)
    VALUES (
        'Marcos',
        '1999-10-29',
        'marcos@email.com',
        'https://marcos.sites.com.br',
        3,
        12000.80   
)";

$conexao = novaConexao();
mysqli_select_db($conexao,"primeiro_banco");
$resultado = $conexao->query($sql);


if($resultado){
    echo "Sucesso ao inserir na tabela !";
}else{
    echo "Erro: " . $conexao->error;
}

$conexao->close();

?>