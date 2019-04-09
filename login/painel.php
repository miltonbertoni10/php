<?php
session_start();
echo "logado com sucesso!";
echo $_SESSION['login'];

if(isset($_GET['loggout'])){
    Login::Loggout();
}
?>
<a href="painel.php?loggout">Sair</a>