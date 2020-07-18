<div class="titulo">Cosntantes</div>

<?php

define('TAXA_DE_JUROS',5.9);
echo TAXA_DE_JUROS;

const NOVA_TAXA = 2.5;

echo "<br>" . NOVA_TAXA;

echo "<br>" . NOVA_TAXA;

$valorVariavel = 1.9;

define('NOVISSIMA_TAXA', $valorVariavel);
echo "<br>" . NOVISSIMA_TAXA;

const OUTRA_TAXA = 3.0 + 4.3;
echo "<br>" . OUTRA_TAXA;

echo '<br>' . PHP_VERSION;

echo "<br> Linha:" . __LINE__;
echo "<br>Diretório : " . __DIR__;


