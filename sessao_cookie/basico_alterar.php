<?php

session_start();
print_r($_SESSION);

?>

<p>
    <b>Nome:</b> <?= $_SESSION['nome'] ?>
    <b>Email:</b> <?= $_SESSION['email'] ?>
</p>


<?php

$_SESSION['email'] = 'maria@gmail.com';

?>

<p>
    <a href="basico.php">
        Voltar
    </a>
</p>    

<p>
    <a href="basico_limpar.php">
        Limpa sessão
    </a>
</p>