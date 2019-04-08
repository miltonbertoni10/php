<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Conexao</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css">
    <script src="main.js"></script>   
</head>
<body>
<?php include("classes/crud.php");

    $con = new crud();
    $Bfetch = $con->select("*","cadastro","",array());

    while($fetch = $Bfetch->fetch(PDO::FETCH_ASSOC)){
        echo $fetch['Nome'] . "</br>";
    }

    
    ?>
</body>
</html>