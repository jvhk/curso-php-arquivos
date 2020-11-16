<?php
date_default_timezone_set('America/Sao_Paulo');
setlocale(LC_TIME,'pt-BR','pt-BR.utf-8','portuguese');

//pastas
define('MODEL_PATH',realpath(dirname(__FILE__) . '/src/models'));
define('VIEW_PATH',realpath(dirname(__FILE__) . '/src/views'));
define('CONTROLER_PATH',realpath(dirname(__FILE__) . '/src/controllers'));


//Arquivos
require_once(realpath(dirname(__FILE__) . '.\database.php'));
require_once(realpath(dirname(__FILE__) . '.\loader.php'));
require_once(realpath(MODEL_PATH .DIRECTORY_SEPARATOR. '.\database.php'));