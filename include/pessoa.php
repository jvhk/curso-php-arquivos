<?php
require_once('usuario.php');


class Pessoa{
    public $nome;
    public $idade;


    function __construct($novoNome,$idade)
    {   
        $this->nome = $novoNome;
        $this->idade = $idade;
        echo "Obj pessoa criado<br>";
    }

    function __destruct()
    {
        echo "Obj pessoa destruido<br>";
    }

    public function apresentar(){
        echo "{$this->nome}, {$this->idade} anos <br>";
    }
}