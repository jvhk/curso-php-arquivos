<?php
session_start();
//Iniciando sessão


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
    <a href="/curso-php-arquivos/sessao_cookie/basico_alterar.php">
        Alterar sessão
    </a>
</p>

