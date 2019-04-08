<?php
require_once("config.php");

/*$sql = new Sql();

$cadastros = $sql->select("select * from cadastro");

echo json_encode($cadastros);*/

//$user = new Usuario();
//$user->loadById(3);
//echo $user;

//$lista = Usuario::getLista();

//echo json_encode($lista);
//$nome ="milton";
//$search = Usuario::search($nome);

//echo json_encode($search);

//$login = new Usuario();
//$login->login("milton","12345");

//echo $login;

#insert no banco de dados com procedure
/*$usuario = new Usuario();
$usuario->setNome("bernadinho");
$usuario->setSexo("masculino");
$usuario->setCidade("bhzim");
$usuario->insert();
echo $usuario;*/

/*
CREATE PROCEDURE sp_usuarios_insert(
    pnome varchar(100),
    psexo varchar(30),
    pcidade varchar(100)
)
BEGIN
    INSERT INTO cadastro (Nome,Sexo,Cidade) VALUES (pnome,psexo,pcidade)
    SELECT * from cadastro WHERE Id = LAST_INSERT_ID();
END
*/


#update 


#para mostrar um json
$lista =  Usuario::getLista();
foreach ($lista as $key => $value) {
    echo "Nome:" . json_encode($value['Nome']) . "<br>";
    echo "Sexo:" . json_encode($value['Sexo']) . "<br>";
    echo "Cidade:" . json_encode($value['Cidade']) . "<br>";
    echo "<hr>";
}
