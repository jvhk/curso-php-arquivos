<?php
loadModel('Login');

if(count($_POST) > 0){
    $login = new Login($_POST);

    try{
        $login->checkLogin();
        echo "Usuario {$user->name} logado";
    }catch(Exception $e){
        echo "Falha de login";
    }
}

loadView('login',$_POST);