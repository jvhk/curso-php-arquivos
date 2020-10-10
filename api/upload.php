<div class="titulo">Upload</div>
<?php
print_r($_FILES);
print_r($_POST);
print_r($_GET);

if($_FILES && $_FILES['arquivo'])
    $pastaUpload = 'C:\Users\joaov\Imagens';
    $nomeArquivo = $_FILES['arquivo']['name'];
    $arquivo = $pastaUpload . $nomeArquivo;
    $tmp = $_FILES['arquivo']['tmp_name'];

    if(move_uploaded_file($tmp,$arquivo)){
        echo "<br>Arquivo válido, enviado com sucesso <br>";
    }else{
        echo "Erro ao enviar o arquivo <br>";
    }
?>


<form action="#" method="post"  enctype="multipart/form-data">
    <input type="file" name="arquivo">
    <button>Enviar</button>
</form>

<style>
    input,button{
        font-size: 1.2rem;
    }
</style>