<?php
session_start();

echo $_SESSION['Nome'];

#https encriptografa o id de sessão do usuario
session_regenerate_id();
echo session_id();

if(isset($_POST["login"])){
    if(($_POST['username'] == "Milton") and ($_POST['password'] == "12345")){

        $_SESSION['Login'] = TRUE;
    }else{
        session_unset();
        session_destroy();

    }
}


