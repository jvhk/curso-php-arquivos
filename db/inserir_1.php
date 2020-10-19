<div class="titulo">Inserir registro 01</div>

<?php
require_once "conexao.php";

$sql = "INSERT INTO cadastro 
    (nome, nascimento, email, site, filhos, salario)
    VALUES (
        'Marieta',
        '1989-10-29',
        'marieta@email.com',
        'https://marieta.sites.com.br',
        2,
        13000.80   
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