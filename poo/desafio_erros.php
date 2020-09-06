<div class="titulo">Desafio erros</div>


<?php

interface Template{
    function metodo1();
    public function metodo2($parametro);
}

abstract class ClasseAbstrata implements Template{
    public function metodo3(){
        echo "Estou funcionando";
    }
}

class Classe extends ClasseAbstrata {
    function __construct($parametro)
    {
        
    }

    public function metodo1(){
        echo "Metodo 1";
    }

    public function metodo2($param){
        echo "Metodo 2: Paramentro : $param";
    }

    public function metodo3(){
        parent::metodo3();
    }



}

$exemplo = new Classe("Ola");
$exemplo->metodo3();