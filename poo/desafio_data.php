<div class="titulo">Desafio Data</div>

<?php


class Data{
    public $dia = 10;
    public $mes = 8;
    public $ano = 2020;


    public function apresentarData(){
        echo "{$this->dia}/{$this->mes}/{$this->ano}";
    }
}

$data = new Data();

$data->apresentarData();