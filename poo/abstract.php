<div class="titulo">Abstract</div>

<?php

abstract class Abstrata{
    abstract public function metodo1();
    abstract protected function metodo2($parametro);
}


abstract class FilhaAbstrata extends Abstrata{
    public function metodo1()
    {
        echo "Executando metodo 1 <br>";
    }

    abstract public function metodo3();
}


class Concreta extends FilhaAbstrata{
    public function metodo1()
    {
        echo "Executando metodo 1 na classe concreta: <br>";
        parent::metodo1();
    }

    protected function metodo2($var){
        echo "Executando metodo 2 na classe Concreta, com o parâmetro: $var <br>";
    }

    public function metodo3(){
        echo "Executando metodo 3 na classe concreta <br>"; 
    }
}

$concreta = new Concreta;
$c->metodo1();
$c->metodo3();

echo "FIM";