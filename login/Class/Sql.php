<?php
class Sql extends PDO
{
   private $conn;
   
   public function __construct() {
       $this->conn = new PDO("mysql:host=localhost;dbname=crud","root","");
   }

   private function setParams($statements,$parameter = array()){
       foreach ($parameter as $key => $value) {
           $this->setParam($statements,$key,$value);
       }
   }

   private function setParam($statements,$key,$value){
        $statements->bindParam($key,$value);
   }

   public function query($query, $params = array()){
       $stmt = $this->conn->prepare($query);
       $this->setParams($stmt,$params);
       $stmt->execute();
       return $stmt;
   }

   public function select($query, $params = array()){
      $stmt = $this->query($query,$params);
      return $stmt->fetchAll(PDO::FETCH_ASSOC);

   }
}
