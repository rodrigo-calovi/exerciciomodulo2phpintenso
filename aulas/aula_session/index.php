<?php
    session_start();
    if(isset($_SESSION['logado']) && $_SESSION['logado'] == 1) {
        header('Location: painel.php');
        die();
    }
?>

<!DOCTYPE html>
<html lang="pt-br">

    <head>
        <title>Aula Session- Login</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
    </head>

    <body>
        <form action="login.php" method="POST">
            <input type="password" name="txtSenha">
            </br>
            <input type="submit" value="Logar">
        </form>
    </body>

</html>