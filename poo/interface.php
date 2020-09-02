<div class="titulo">Interface</div>

<?php

//Os métodos de uma interface sempre serão public

interface Animal{
    function respirar();

}

interface Mamifero{
    function mamar();
}

interface Canino extends Animal,Mamifero{
    function latir():string;
}


class Cachorro implements Animal,Canino{
    function respirar()
    {
        return "Irei usar oxigênio<br>";
    }

    function latir(): string
    {
        return "Au au<br>";
    }

    function mamar(){
        return "Irei usar leite<br>";
    }    
}


$animal1 = new Cachorro;
echo $animal1->respirar();
echo $animal1->latir();
echo $animal1->mamar();


var_dump($animal1);
echo "<br>";
var_dump($animal1 instanceof Cachorro);
echo "<br>";
var_dump($animal1 instanceof Canino);
echo "<br>";
var_dump($animal1 instanceof Mamifero);

