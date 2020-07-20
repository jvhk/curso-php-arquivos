<div class="titulo">Estruturas de controle IF ELSE</div>

<?php

if(true){
    echo "Serei impresso";
}

echo "<br>Próxima instrução";


if(true ){
    echo "<br> Verdadeiro";
}else{
    echo "<br> Falso";
}

if(false){
    echo "Passo A<br>";
}else if(true){
    echo "Passo B<br>";
}else if(true){
    echo "Passo C<br>";
}else{
    echo "Ultimo passo<br>";
}


echo "<br>Fim";