<div class="titulo">Escrevendo arquivo</div>
<?php
$arquivo = fopen('texte.txt','w');  //criando um arquivo em modo de escrita (write)
fwrite($arquivo,"Valor inicial \n");    //escreve no arquivo
$str = "Segunda linha\n";
fwrite($arquivo,$str);
fclose($arquivo); //fecha o arquivo

$arquivo = fopen('teste.txt','w');
fwrite($arquivo,"Novo conteúdo\n");
fclose($arquivo);

$arquivo = fopen('teste.txt','a'); //append, adicionando novas linhas sem sobrescrever o arquivo antigo
fwrite($arquivo,"novos valores\n");
fwrite($arquivo,"Adicionando em um segundo momento\n");
fclose($arquivo);

ini_set('display_errors',1);

$arquivo = fopen('teste.txt','x'); //pede a obrigação de criar um arquivo novo, porém irá reclamar caso já exista um com esse nome
fclose($arquivo);

