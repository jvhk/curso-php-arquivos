<div class="titulo">Encapsulamento</div>


<?php

class A{
    public $public = 'Público';
    protected $protegido = 'Protegido';    //visivel apenas para os filhos dessa classe
    private $privado = 'Privado';           //restrito a classe em que ele foi definido


    public function mostrarA(){
        echo "Class A) Publico = {$this->publico}<br>";
        echo "Class A) Protegido = {$this->protegido}<br>";
        echo "Class A) Privado = {$this->privado}<br>";
    }

    protected function vaiPorHeranca(){
        echo "Serei impresso por herança";
    }

    private function naoMostrar(){
        echo "Não vou imprimir! <br>";
    }
}





$a = new A;
echo $a->publico;
$a->mostrarA();

//Não é permitida pois é privada
//$a->naoMostrar();





class B extends A{
    public function mostrarB(){
        echo "Class B) Publico = {$this->publico}<br>";
        echo "Class B) Protegido = {$this->protegido}<br>";
        echo "Class B) Privado = {$this->privado}<br>";

        parent::vaiPorHeranca(); 
    }
}


$b = new B;
$b->mostrarB();