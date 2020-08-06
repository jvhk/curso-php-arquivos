<div class="titulo">$_POST</div>

<form action="#" method="post">
    <input type="text" name="nome" placeholder="nome">
    <input type="text" name="sobrenome" placeholder="sobrenome">
    <button>Enviar</button>
</form>

<style>
    form > *{
        font-size: 1.8rem;
    }
</style>


<?php

print_r($_POST);
echo "<br>";
print_r($_GET);
echo "<br>";

echo count($_POST);
echo "<br>";
echo count($_GET);