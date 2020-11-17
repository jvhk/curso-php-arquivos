<?php
date_default_timezone_set('America/Sao_Paulo');
setlocale(LC_TIME,'pt-BR','pt-BR.utf-8','portuguese');

//pastas
define('MODEL_PATH',realpath(dirname(__FILE__) .DIRECTORY_SEPARATOR. '/src/models'));
define('VIEW_PATH',realpath(dirname(__FILE__) .DIRECTORY_SEPARATOR. '/src/views'));
define('TEMPLATE_PATH',realpath(dirname(__FILE__) .DIRECTORY_SEPARATOR. '/src/views/template'));
define('CONTROLER_PATH',realpath(dirname(__FILE__) .DIRECTORY_SEPARATOR. '/src/controllers'));
define('EXCEPTION_PATH',realpath(dirname(__FILE__) .DIRECTORY_SEPARATOR. '/src/exceptions'));


//Arquivos
require_once(realpath(dirname(__FILE__) .DIRECTORY_SEPARATOR. '\database.php'));
require_once(realpath(dirname(__FILE__) .DIRECTORY_SEPARATOR. '\loader.php'));
require_once(realpath(MODEL_PATH .DIRECTORY_SEPARATOR. '\database.php'));
require_once(realpath(EXCEPTION_PATH .DIRECTORY_SEPARATOR. '\AppException.php'));