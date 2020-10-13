<?php
session_start();
?>

<?php
$arquivos = $_SESSION['arquivos'] ?? [];

$pastaUpload = __DIR__ . '/../files/';
$nomeArquivo = $_FILES['arquivo']['name'];
$arquivo = $pastaUpload . $nomeArquivo;
$tmp = $_FILES['arquivo']['tmp_name'];

if(move_uploaded_file($tmp,$arquivo)){
    echo "<br>Arquivo válido e enviado com sucesso.";
    $arquivos[] = $nomeArquivo;
    $_SESSION['arquivos'] = $arquivos;
}else{
    echo "<br>Erro ao enviar arquivo";
}

?>



<div class="titulo">Desafio Imagens</div>
<form action="#" method="post" enctype="multipart/form-data">
    <input type="file" name="arquivo">
    <button>Enviar</button>
</form>

<ul>
    <?php foreach($arquivos as $arquivo): ?>
        <?php if(stripos($arquivo,'.png') > 0 ): ?> <!-- Verifica se dentro do arquivo existe a extensão .png -->
        <li>
            <img src="../files/<?= $arquivo ?>" height="120" />
        </li>
        <?php endif ?>
    <?php endforeach ?>
</ul>


<style>
input,button{
    font-size: 1.2rem;
}

</style>