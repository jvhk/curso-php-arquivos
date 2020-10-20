<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<div class="titulo">Excluir registro #2</div>

<?php
require_once "conexao.php";

$conexao = novaConexao();
mysqli_select_db($conexao,"primeiro_banco");
$registros = [];

if($_GET['excluir']){
    $excluirSql = "DELETE FROM cadastro WHERE id = ?";
    $statement = $conexao->prepare($excluirSql);
    $statement->bind_param("i",$_GET['excluir']);
    $statement->execute();
}

$sql = 'SELECT id,nome,email,nascimento FROM cadastro';
$resultado = $conexao->query($sql);

if($resultado->num_rows > 0){
    while($row = $resultado->fetch_assoc()){
        $registros[] = $row;
    }
}elseif($conexao->error){
    echo "Erro " . $conexao->error;
}

$conexao->close();

?>


<table class="table table-hover table-striped">
    <thead>
        <th>Nome</th>
        <th>Nascimento</th>
        <th>E-mail</th>
        <th>Ações</th>
    </thead>
    <tbody>
        <?php foreach($registros as $registro): ?>
        <tr>
            <td > <?=$registro['nome'] ?> </td>
            <td > 
                <?=
                    date('d/m/Y', strtotime($registro['nascimento'])) //formato BR
                ?>

            </td>
            <td > <?=$registro['email'] ?> </td>
            <td>
                <a href="/curso-php-arquivos/db/excluir_2.php&excluir=<?= $registro['id'] ?>" class="btn btn-danger">
                    Excluir
                </a>
            </td>
        </tr>
        <?php endforeach ?>
    </tbody>
</table>


<style>
    table > *{
        font-size: 1.2rem;
    }
</style>

