<div class="titulo">PDO Excluir</div>

<?php

require_once "consulta_pdo.php";

$id = $_POST['id'];

$sql = "DELETE FROM cadastro WHERE id = ? ";
$conexao = novaConexao();

$stmt = $conexao->prepare($sql);

if($stmt->execute([$id])){
    echo "Sucesso ao excluir! " . '<br>';
}else{
    echo "Código: " . $stmt->errorCode() . "<br>";
    print_r($stmt->errorInfo());
}


?>


<form action="#" method="post">
    <label for="id">
        <input type="number" name="id" placeholder="Insira o id a ser deletado"  id= "id" value="<?= $_POST['id'] ?>">
    </label>
    <button>Excluir</button>
</form>