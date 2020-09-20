<?php

require_once('pessoa.php');

class Usuario extends Pessoa{
    public $login;

    function __construct($novoNome,$idade,$login){
        $this->nome = $novoNome;
        $this->idade = $idade;
        $this->login = $login;
        echo "Obj usuario criado<br>";
    }

    function __destruct()
    {
        echo "Obj usuario destruido<br>";
    }

    public function apresentar(){
        parent::apresentar(); //chama a função já existente 
        echo "@{$this->login}<br>"; //acrescenta a informação a função já existente
    }
}
