<div class="titulo">Include vs Require</div>

<?php

//irá retornar warning error
echo "Usando include com um arquivo inexistente.. <br>";

ini_set('display_errors',1);
include('arquivo_inexistente.php');

//irá retornar fatal error e não executará o restante do código abaixo
echo "Usando require com arquivo inexistente.. <br>";
require('arquivo_inexistente.php');

echo "Não achou mesmo <br>";