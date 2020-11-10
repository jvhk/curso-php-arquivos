<?php
//define(MODEL_PATH,realpath(dirname(__FILE__) .DIRECTORY_SEPARATOR. 'Model.php'));
//require_once(MODEL_PATH);
//require_once(realpath(dirname(__FILE__) .DIRECTORY_SEPARATOR. '.\..\models\Model'));
require_once(realpath(dirname(__FILE__) .DIRECTORY_SEPARATOR. 'Model.php'));

class User extends Model {
    protected static $tableName = 'users';
    protected static $columns = [
        'id',
        'name',
        'password',
        'email',
        'start_date',
        'end_date',
        'is_admin',
    ];
}