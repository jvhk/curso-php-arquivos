<div class="titulo">Desafio Switch</div>

<!--Conversor de unidades-->

<form action="#" method="post">
    <input type="text" name="param">
        <select name="conversao" id="conversao">
            <option value="km-milha">Km -> Milha</option>
            <option value="milha-km">Milha -> Km</option>
            <option value="metro-km">Metro -> Km</option>
            <option value="km-metro">Km -> Metro</option>
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
       $dist = ($valor * 0.621371);
    break;
    case 'milha-km':
        $dist = ($valor / 0.621371);
    break;
    case 'metro-km':
        $dist = ($valor / 1000);
    break;
    case 'km-metro':
        $dist = ($valor * 1000);
    break;
}

echo "Valor convertido tipo ($tipo) : $dist";

?>