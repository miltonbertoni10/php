<?php
class Sql extends PDO
{
    private $conn;

    public function __construct() {

        $this->conn = new PDO("mysql:host=localhost;dbname=crud","root","",array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
    }

    private function setParams($statements, $parameters = array()){
        foreach ($parameters as $key => $value) {
           $this->setParam($statements,$key, $value);
         }
    }

    private function setParam($Statement, $key, $value){
        $Statement->bindParam($key,$value);
    }

    public function query($rawquery, $params = array()) {
        
        $stmt = $this->conn->prepare($rawquery);
        $this->setParams($stmt,$params);
        $stmt->execute();
        return $stmt;
       
    }

    public function select($rawquery, $params = array()){
        $stmt = $this->query($rawquery, $params);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    
}
/*
$("div").click(function(){
    var buton = $("buton").find("i");

    if(is(":hiden") == true){
        buton.removeClass("classe");
    }
    
    
})*/