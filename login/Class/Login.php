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

    public function loadById(){

    }

    public function search(){

    }

    public static function getLista(){
        
    }

    public function select(){

    }

    public function insert(){

    }

    public function delete(){

    }

    public function update(){

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
