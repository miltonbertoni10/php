<?php
abstract class Conexao
{
    public function conecta(){

        try{

            $con = new PDO("mysql:host=localhost;dbname=crud","root","");
            return $con;

        }catch(PDOException $erro){
            return $erro->getMessage();
        }
    }
}
