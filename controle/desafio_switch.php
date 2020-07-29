<div class="titulo">Desafio Switch</div>

<!--Conversor de unidades-->

<form action="#" method="post">
    <input type="text" name="param">
        <select name="conversao" id="conversao">
            <option value="km-milha">Km -> Milha</option>
            <option value="milha-km">Milha -> Km</option>
            <option value="metro-km">Metro -> Km</option>
            <option value="km-metro">Km -> Metro</option>
            <option value="fahrenheit-celsius">Fahrenheit -> Celsius </option>
            <option value="celsiu-fahrenheit">Celsius -> Fahrenheit</option>
        </select>
        <button type="submit" value="Converter">Calcular</button>
</form>

<style>
    form > *{
        font-size: 1.8rem;

    }
</style>

<?php

$valor = $_POST['param'];
$tipo = $_POST['conversao'];

//echo var_dump($tipo);

switch($tipo){
    case 'km-milha':
       $conversao = ($valor * 0.621371);
    break;
    case 'milha-km':
        $conversao = ($valor / 0.621371);
    break;
    case 'metro-km':
        $conversao = ($valor / 1000);
    break;
    case 'km-metro':
        $conversao = ($valor * 1000);
    break;
    case 'fahrenheit-celsius':
        $conversao = ($valor - 32) / 1.8000;
    break;
    case 'celsiu-fahrenheit':
        $conversao = ($valor * 1.8000) + 32;
    break;
}

echo "Valor convertido tipo ($tipo) : $conversao";

?>