<div class="titulo">Tipo Booleano</div>

<?php

echo TRUE;
echo '<br>';
echo FALSE;


echo '<br>' . var_dump(true);
echo '<br>' . var_dump(false);
echo '<br>' . var_dump('false');
echo '<br>' . is_bool(false);


//Como fazer regras de conversões:
echo '<p>Regras</p>';
echo '<br>' . var_dump((bool)0); //dos valores inteiros apenas 0 será convertido para falso
echo '<br>' . var_dump((float)0);
echo '<br>' . var_dump((bool)-1); //true
echo '<br>' . var_dump((bool)20); //true
echo '<br>' . var_dump((bool)0.0000001); //true
echo '<br>' . var_dump((bool)""); //strings vazias são consideradas false 
echo '<br>' . var_dump((bool)" "); //true
echo '<br>' . var_dump((bool)00); //true

//Outra forma de conversão:
echo '<br>' . var_dump(!!"false");

?>