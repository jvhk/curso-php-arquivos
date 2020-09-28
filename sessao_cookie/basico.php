<div class="titulo">Basico</div>

<?php
//Iniciando sessão
session_start();

print_r($_SESSION); //array associativo a sessão

echo '<br>';

if(!$_SESSION['nome']){
    $_SESSION['nome'] = 'João';
}

if(!$_SESSION['email']){
    $_SESSION['email'] = 'joao@gmail.com';
}

print_r($_SESSION);

?>


<p>
    <a href="basico_alterar.php">
        Alterar sessão
    </a>
</p>

