<div class="titulo">Traits</div>

<?php

trait validacao{
    public function validarString($str){
        return isset($str) && $str !== ' ';
    }
}

trait validacaoMelhor{
    public $b = 'Valor b';
    private $c = 'Valor c (privado)';
    
    public function validarStringMelhor($str){
        return isset($str) && trim($str);
    }
}


class Usuario1{
    use validacao,validacaoMelhor;

    public function imprimirValorC(){
        echo '<br>',$this->c;
    }
}


$user = new Usuario1();
var_dump($user->validarString(' '));
echo '<br>';
var_dump($user->validarStringMelhor(' '));
echo '<br>';
echo $user->a, '<br>', $user->b;
