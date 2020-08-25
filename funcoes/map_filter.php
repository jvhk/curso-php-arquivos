<div class="titulo">Map e Filter</div>

<?php

$notas = [5.8,7.3,9.8,6.7];

$notasFinais1 = [];

foreach($notas as $nota){
    $notasFinais1[] = round($notas);  
}


print_r($notasFinais1);


echo "<br>";


# USANDO MAP & FILTER
$notasFinais2 = array_map("round", $notas);

print_r($notasFinais2);




$apenasAprovados1 = [];

foreach($notas as $nota){
    if($nota >= 7){
        $apenasAprovados1[] = $nota;
    }
}

echo "<br>";
print_r($apenasAprovados1);



#FILTER

function aprovados($nota){
    return $nota>=7;
}

echo "<br>";

$apenasAprovados2 = array_filter($notas, "aprovados");

print_r($apenasAprovados2);