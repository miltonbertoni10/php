<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
</head>
<body>
    <div>

    <?php 
    include('config.php');
    if (isset($_POST['logar'])) {
        $username = filter_input(INPUT_POST,'username',FILTER_SANITIZE_SPECIAL_CHARS);
        $password = filter_input(INPUT_POST,'password',FILTER_SANITIZE_SPECIAL_CHARS);
       
        if(Login::validateLogin($username,$password)){
           //faço a requisição para validar login pelo metodo 
           //se true libera se nao avisa
            $_SESSION['login'] = true;
            $_SESSION['user'] = $username;
            $_SESSION['password'] = $password;
            header('Location:painel.php');
        }else{
            echo "Usuario ou senha invalidos!";
       }
    }     

    ?>

        <Form method="Post" action="index.php">
            <label for="user">Username:</label>
            <input type="text" name="username">
            <label for="password">Password:</label>
            <input type="password" name="password">
            <button type="submit" name="logar">Logar</button>
        </Form>
    </div>
</body>
</html>