<?php

class AppException extends Exception{


    public function __construct($mensage, $code = 0, $previous = null){
        parent::__construct($mensage,$code,$previous);
    }
}