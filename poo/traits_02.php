<div class="titulo">Traits 02</div>

<?php

trait validacao1{
    public function validarString($str){
        return isset($str) && $str !== '';
    }
}


trait validacaoMelhor1{
    public function validarString($str){
        return isset($str) && trim($str);
    }
}


class User{
    use validacao1,validacaoMelhor1{
        validacaoMelhor1::validarString insteadOf validacao1;

        validacao1::validarString as validacaoSimples;
    }
}


$user = new User;
var_dump($user->validacaoSimples(' '));
