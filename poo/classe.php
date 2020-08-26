<div class="titulo">Primeira classe</div>

<?php

class Cliente{
    //atributos
    public $nome = "anônimo";
    public $idade = 18;

    public function apresentar(){
        echo "Nome: {$this->nome} <br> Idade: {$this->idade} <br>";
    }

}


$c1 = new Cliente();
$c1->apresentar();


$c2 = new Cliente();
$c2->nome = "Camila";
$c2->idade = 20;
$c2->apresentar();