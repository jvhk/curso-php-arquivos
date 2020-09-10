<div class="titulo">Metodos magicos</div>

<?php

class Pessoa{
    public $nome;
    public $idade;

    function __construct($nome, $idade)
    {
        echo "Construtor invocado <br>";
        $this->nome = $nome;
        $this->idade = $idade;
    }

    function __destruct()
    {
        echo "Objeto destruido";
    }


    public function __toString()
    {
        return "{$this->nome} tem {$this->idade} anos. <br>";
    }

    public function apresentar(){
        echo $this . "<br>";
    }

    public function __get($name)
    {
        echo "Lendo um atributo não declarado: {$name} <br>";
    }

    public function __set($name, $value)
    {
        echo "Alterando atributo não declarado:{$name}/{$value}<br>";
    }

    public function __call($metodo, $arguments)
    {
        echo "Tentando executar método: {$metodo}.";
        echo "<br>, com os parametros: ";
        print_r($arguments);
        echo "<br>";
    }


}


$pessoa = new Pessoa("João", 20);
$pessoa->apresentar(); //toString
echo $pessoa; //toString
$pessoa->nome = "Reinaldo";
$pessoa->apresentar(); //toString

//get
$pessoa->nomeNaoDeclarado;

//set
$pessoa->nomeNaoDeclarado = "Valdir";
$pessoa->nomeNaoDeclarado;

//Call
$pessoa->exec();
$pessoa->exec(1,'maria',false,[1,2,3]);
