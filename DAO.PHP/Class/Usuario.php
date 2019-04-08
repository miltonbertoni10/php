<?php
class Usuario
{
    private $id;
    private $nome;
    private $sexo;
    private $cidade;

    public function setId($id){
        $this->id = $id;
    }

    public function getId(){
        return $this->id;
    }

    public function setNome($nome){
        $this->nome = $nome;
    }

    public function getNome(){
        return $this->nome;
    }

    public function setSexo($sexo){
        $this->sexo = $sexo;
    }

    public function getSexo(){
        return $this->sexo;
    }
    public function setCidade($cidade){
        $this->cidade = $cidade;
    }

    public function getCidade(){
        return $this->cidade;
    }

    public function loadById($id){
        $sql = new Sql();

        $results = $sql->select("SELECT * FROM cadastro WHERE Id=:id",array(
            ":id"=>$id
        ));

        if(count($results) >0){
            $this->setData($results[0]);

        }
    }

    public static function getLista(){
        $sql = new Sql();

        return $sql->select("SELECT * FROM cadastro");
    }

    public static function search($login){
        $sql = new Sql();
        return $sql->select("select * from cadastro where nome like :search", array(
            ':search'=>"%".$login."%"
        ));
    }

    public function login($login,$senha){
        $sql = new Sql();

        $results = $sql->select("SELECT * FROM login WHERE login=:login AND senha=:senha",array(
            ":login"=>$login,
            ":senha"=>$senha
        ));

        if(count($results) >0){
            echo "logado com sucesso!";
        }else{
            throw new Exception("Login ou senha invalidos!", 1);
            
        }
    }

    public function __toString()
    {
        return json_encode(array(
            "id"=>$this->getId(),
            "nome"=>$this->getNome(),
            "sexo"=>$this->getSexo(),
            "cidade"=>$this->getCidade()
        ));
    }

    public function setData($data){

        $this->setId($data["Id"]);
        $this->setNome($data["Nome"]);
        $this->setSexo($data["Sexo"]);
        $this->setCidade($data["Cidade"]);
    }

    public function insert(){
        $sql = new Sql();

        $result = $sql->select("CALL sp_usuarios_insert(:nome,:sexo,:cidade)", array(
            ":nome" => $this->getNome(), 
            ":sexo" => $this->getSexo(),
            ":cidade" => $this->getCidade()
        ));

        if(count($result) >0){
            $this->setData($result[0]);

        }
    }

    public function update($nome,$sexo,$cidade){

        $this->setNome($nome);
        $this->setSexo($sexo);
        $this->setCidade($cidade);

        $sql = new Sql();

        $result = $sql->query("UPDATE cadastro set Nome = :nome, Sexo = :sexo,Cidade=:cidade WHERE Id = :id",array(
            ":id"=>$this->getId(),
            ":nome"=>$this->getNome(),
            ":sexo"=>$this->getSexo(),
            ":cidade"=>$this->getCidade()

        ));
    }

    public function delete(){
        $sql = new Sql();
        $sql->query("DELETE FROM cadastro WHERE Id=:id",array(
            ":id" => $this->getId()
        ));
    }
}


