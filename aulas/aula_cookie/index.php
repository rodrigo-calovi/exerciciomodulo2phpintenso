<?php 
    //criar e destroy com tempo o cookie apartir do path dela
    setcookie('nome','Rodrigo Calovi', time() - 3600, '/');
    //cria cookie
    //setcookie('nome','Rodrigo Calovi', time() - 3600);
    //forma alternativa
    //$_COOKIE['nome'] = 'teste';

    //unset($_COOKIE['nome']);

    //echo $_COOKIE['nome'];
    if(isset($_COOKIE["nome"])) {
        //exibe
        echo $_COOKIE['nome'];
    }
?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>Cookies</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
    </head>
    <body>
    
    </body>
</html>