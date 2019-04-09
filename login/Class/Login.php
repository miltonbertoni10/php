<?php
class Login
{
    private $id;
    private $login;
    private $senha;

    public function setId($id){
        $this->id = $id;
    }

    public function getId(){
        return $this->id;
    }

    public function setLogin($login){
        $this->login = $login;
    }

    public function getLogin(){
        return $this->login;
    }

    public function setSenha($senha){
        $this->senha = $senha;
    }

    public function getSenha(){
        return $this->senha;
    }

    public static function validateLogin($username,$password){
        /*if(true){
            //se existir usuario return true
            return true;
        }else {
            return false;
            //se não return false
        }*/
        return true;
    }

    public static function Logged(){
        //verifica se está logado
    }

    public static function Loggout(){
        //deslogar
        session_unset();
        session_destroy;
        header('Location:index.php');
    }

    public function __toString()
    {
        return json_encode(array(
            "id" => $this->getId(),
            "login" => $this->getLogin(),
            "senha" => $this->getSenha()
        ));
    }
}
