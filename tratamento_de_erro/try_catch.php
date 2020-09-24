<div class="titulo">Try/Catch</div>

<?php

//echo intdiv(7,0);
try{
    echo intdiv(7,0);
}catch(Error $e){
    echo "Houve um erro <br>";
}catch(Exception $e){
    echo "Houve um erro Exception <br>";
}


try{
    throw new Exception('Um erro muito estranho aconteceu');
    echo intdiv(7,0);
}catch(DivisionByZeroError $e){
    echo "Divisão por zero <br>";
}catch(Throwable $e){
    echo "Erro encontrado" . $e->getMessage() . '<br>';
}finally{
    echo "Finally é sempre executado!<br>";
}

echo "Execução continua após o tratamento dos erros.. <br>";