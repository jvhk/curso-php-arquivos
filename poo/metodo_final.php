<div class="titulo">Metodo Final</div>


<?php

//O MÉTODO FINAL GARANTE QUE NÃO SERÁ POSSÍVEL HERANÇA NAQUELA CLASSE

abstract class Abstrata{
    abstract public function metodo1();

    final public function metodo2(){
        echo "Não vou mudar<br>";
    }
}

/*class Classe extends Abstrata{
    public function metodo1(){

    }

    //não pode ser herdado
    /*public function metodo2(){
        echo "Entendendo metodo 2";
    }
    
}*/


$classe = new Classe;
$classe->metodo1();
//$classe->metodo2();




//Final class

final class Unica{
    public $att = 'Valor';
}

class Duplicada extends Unica{
    public $att2;
}

$unica = new Unica;
echo $unica->att;