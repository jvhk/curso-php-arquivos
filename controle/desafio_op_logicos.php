<div class="tit">Desafio OP. Lógicos</div>

<form action="#" method="POST">
    <div>
        <label for="t1">Trabalho 1 (Terça):</label>
        <select name="t1" id="t1">
            <option value="1">Executado</option>
            <option value="0">Não Executado</option>
        </select>
    </div>
    <div>
        <label for="t2">Trabalho 2 (Quinta):</label>
        <select name="t2" id="t2">
            <option value="1">Executado</option>
            <option value="0">Não Executado</option>
        </select>
    </div>
    <button>Executar</button>
</form>

<style>
    button,select{
        font-size: 1.8rem;
    }
</style>

<?php
//Para efeitos de teste
//echo $_POST['t1'];
//echo $_POST['t2'];

if(isset($_POST['t1']) && isset($_POST['t2'])){
    $t1 =  $_POST['t1'] == '1';
    $t2 = !!$_POST['t2'];
    $tv = '';
    $sorvete = false;


    if($t1 && $t2){
        $tv = '50pol';
    }

    if($t1 xor $t2){
        $tv = '32pol';  
    }

    if($t1 or $t2){
        $sorvete = true;
    }


    if($tv){
        $resultado = "Vamos comprar uma tv de $tv";
    }else{
        $resultado = "Sem tv dessa vez";
    }

    if(!$sorvete){
        $resultado .= "<br>Estamos mais saudaveis!";
    }else{
        $resultado .= "<br>Tomaremos sorvete";
    }

    echo "<p>$resultado</p>";
}