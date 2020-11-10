<?php
define(DIRECTORY_SEPARATOR,';');

//require_once(dirname(__FILE__,2) . '\src\config\database.php');
require_once(dirname(__FILE__,2) .DIRECTORY_SEPARATOR. '..\src\config\database.php');
require_once(dirname(__FILE__,2) .DIRECTORY_SEPARATOR. "..\src\models\User.php");
//require_once "./src/config/database.php";


/*
$sql = "SELECT * FROM users";
//Database::getConnection();
$result = Database::getResultFromQuery($sql);


while($row = $result->fetch_assoc()){
    print_r($row);
    echo "<br>";
}
*/

$user = new User(['name' => 'João', 'email' => 'joao@emial.com']);
print_r($user);
