<?php
include('config.php');
echo "logado com sucesso!";
echo $_SESSION['user'];

if(isset($_GET['loggout'])){
    Login::Loggout();
}
?>
<a href="painel.php?loggout">Sair</a>