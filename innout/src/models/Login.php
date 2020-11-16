<?php
loadModel('User');

class Login extends Model {
    
    
    public function checkLogin(){
        $user = USER::getOne(['email' => $this->email]); //consulta no banco
        if($user){
            if(password_verify($this->password,$user->password)){
                return $user;
            }
        }
        throw new Exception();

    }
}