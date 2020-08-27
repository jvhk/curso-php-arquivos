<div class="titulo">Construtor e destrutor</div>

<?php

class Pessoa{
    public $nome;
    public $idade;


    function __construct($nome,$idade){
        echo "Objeto construido<br>";
        $this->nome = $nome;
        $this->idade = $idade;
    }

    function __destruct()
    {
        echo "Morreu: destruct!<br>";
    }

    public function apresentar(){
        echo "{$this->nome}, {$this->idade} anos <br>";
    }
}


$pessoa = new Pessoa("João",20);
$pessoa->apresentar();

$pessoa = null;