<div class="titulo">Desafio</div>

<?php
ini_set('display_errors',1);
require_once('usuario.php');

$usuario = new Usuario("João",21,"joaozin");
$usuario->apresentar();
unset($usuario);