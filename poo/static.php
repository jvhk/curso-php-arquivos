<div class="titulo">Membros estáticos</div>

<?php

class A{
    public $naoStatic = 'Variável de instância';
    public static $static = 'Variável de classe';

    function mostraA(){
        echo "Não estático {$this->naoStatic}<br>";
        //echo "Estática {$this->static}<br>";
        echo "Estática " . self::$static . "<br>";
    }

    public static function mostrarStatic(){
        //echo "Não estático {$this->naoStatic}<br>";
        echo "Estática " . self::$static . "<br>";
    }
}


$objA = new A;
$objA->mostrarA();
$objA->mostrarStatic();