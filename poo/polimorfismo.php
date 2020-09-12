<div class="titul">Polimorfismo</div>

<?php

abstract class Comida{
    public $peso;
}

class Arroz extends Comida{

}

class ArrozAGrega extends Arroz{

}

class Feijao extends Comida{

}

class Sorvete extends Comida{
    
}

class Pessoa{
    public $peso;

    function __construct($peso)
    {
        $this->peso = $peso;
    }

    public function comer(Arroz $comida){
        $this->peso += $comida->peso;
    }
}   


$c1 = new Arroz;
$c1->peso = 0.55;

$c2 = new Sorvete;
$c2->peso = 0.65;

$c3 = new ArrozAGrega;
$c3->peso = 0.85;

$c2 = new Sorvete;
$c2->peso = 0.65;

$p = new Pessoa(83.00);
$p1->comer($c1);
$p1->comer($c3);
# $p1->comer($c2); //não é possível pois no método comer foi definido apenas o acesso a comidas do tipo Arroz ou extenções dela
echo "Peso: {$p->peso}";