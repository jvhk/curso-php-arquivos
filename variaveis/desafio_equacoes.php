<div class="titulo">Desafio Equação</div>

<?php

$numeradorA = (6*(3+2))**2;
$divisorA = 3*2;
$numeradorB = ((1-5)*(2-7))**2;
$divisorB = 2;

$divisorGeral = 10**3;

$equacaoFinal = (((($numeradorA/$divisorA) - ($numeradorB/$divisorB))**3)/$divisorGeral);

echo "Valor final = " . $equacaoFinal; //precisa dar -125