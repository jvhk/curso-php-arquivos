<div class="titulo">Arrays Constantes</div>

<?php

const FRUTAS = ['laranja','banana'];

//FRUTAS[0] = 'maçã'; não é possível em constantes

echo FRUTAS[0];

echo '<br>';

const CARROS = [
    "fiat" => "uno",
    "ford" => "ka"
];

echo CARROS['fiat'];

//CARROS['BMW'] = '325i'; não é possivel também

define('CIDADES', array('Belo Horizonte','Recife'));
echo '<br>' . CIDADES[1];

//CARROS[0] = 'Rio de Janeiro'; também não é possível

