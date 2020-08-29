<div class="titulo">Herança</div>

<?php

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


#Classe que herda de Pessoa
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


$usuario = new Usuario("João",21,"joaozin");
$usuario->apresentar();