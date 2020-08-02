<div class="titulo">Sorteio</div>

<?php

$nomes = ["Elza","Rapunzel","Branca de Neve","Cinderela"];
$index = array_rand($nomes);

?>
<h1><?php echo($nomes[$index]); ?></h1>