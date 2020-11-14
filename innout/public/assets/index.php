<?php
define(DIRECTORY_SEPARATOR,';');

//require_once(dirname(__FILE__,2) . '\src\config\database.php');
require_once(dirname(__FILE__,2) .DIRECTORY_SEPARATOR. '..\src\config\database.php');
//require_once(dirname(__FILE__,2) .DIRECTORY_SEPARATOR. "..\src\models\User.php");
require_once(dirname(__FILE__,2) .DIRECTORY_SEPARATOR. '..\src\views\login.php');
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
$user->email = 'maria@email.com';
echo "<br>";
print_r($user->email);
echo "<br>";

print_r($user);
echo "<br>";
//$user->__set('email','marcos@email.com');
//print_r($user->__get('email'));
//echo "<br>";

echo "<hr>";

//Gerando comando SELECT
echo "<b>Abaixo do comando select:</b>", "<br>";
//echo $user->getAll(['id' => 1],'name,email');
echo "<br>";
//echo $user->getSelect(['name' => 'Chaves','email' => 'chaves@cod3r.com.br']);
print_r(User::getAll(['id' => 1],'name,email'));
echo "<br>";

print_r(User::getAll([],'name')); //com filtro vazio e retornar apenas name
echo "<br>";

foreach(User::getAll([],'name') as $user){
    echo $user->name;
    echo "<br>";
}