<?php
loadModel('User');

class Login extends Model {
    
    
    public function checkLogin(){
        $user = USER::getOne(['email' => $this->email]); //consulta no banco
        if($user){
            if($user->end_date){
                throw new AppException('Usuário está desligado da empresa.');
            }
            if($user->password_verify($this->password,$user->password)){
                return $user;
            }
        }
        throw new AppException('Usuário/Senha inválidos.');

    }
}