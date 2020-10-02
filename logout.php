<?php
session_start();
session_destroy();
unset($_COOKIE['usuario']); //matando a sessão de cookie do usuario
setcookie('usuario',' '); //setando usuario como vazio após o logout 
header('Location: login.php');

