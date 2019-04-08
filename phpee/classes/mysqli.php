<?php
/*$con = new mysqli("localhost","root","","crud");

if ($con->connect_error) {
  echo "Erro: " . $con->connect_error;
}*/

#PDO
$con = new PDO("mysql:host=localhost;dbname=crud","root","");

$con->beginTransaction();
//inserir no banco de dados
$insert = $con->prepare("INSERT INTO cadatro (Nome,Sexo,Cidade) VALUES (?,?,?)");
/*
$insert->bind_param(":nome",$nome);
$insert->bind_param(":sexo",$sexo);
$insert->bind_param(":cidade",$cidade);
*/
//passa um array dentro de execute
$insert->execute(array($nome,$sexo,$cidade));

//$con->rollBack();
$con->commit();

//busca os dados do banco de dados
$result = $con->query("select * from cadastro");
while ($row = $result->fetch_assoc()) {
    echo $row['Nome'] . "<br>";
}