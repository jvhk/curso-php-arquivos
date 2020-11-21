<?php

function loadModel($modelName){
    require_once(MODEL_PATH .DIRECTORY_SEPARATOR. "/{$modelName}.php");
}

function loadView($viewName,$params = array()){
    if(count($params) > 0){
        foreach($params as $key => $value){
            if(strlen($key) > 0){
                ${$key} = $value;
            }
        }
    }
    require_once(VIEW_PATH .DIRECTORY_SEPARATOR. "/{$viewName}.php");
}


function loadTemplateView($viewName,$params = array()){
    if(count($params) > 0){
        foreach($params as $key => $value){
            if(strlen($key) > 0){
                ${$key} = $value;
            }
        }
    }
    //require_once(TEMPLATE_PATH .DIRECTORY_SEPARATOR. "/header.php");
    //require_once(TEMPLATE_PATH .DIRECTORY_SEPARATOR. "/menu.php");
    require_once(TEMPLATE_PATH .DIRECTORY_SEPARATOR. "\header.php");
    require_once(TEMPLATE_PATH .DIRECTORY_SEPARATOR. "\left.php");
    require_once(VIEW_PATH .DIRECTORY_SEPARATOR. "{$viewName}.php");
    require_once(TEMPLATE_PATH .DIRECTORY_SEPARATOR. "\footer.php");
    
    //require_once(TEMPLATE_PATH .DIRECTORY_SEPARATOR. "/footer.php");
}




