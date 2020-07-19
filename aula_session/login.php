<?php
session_start();
define('PASS', '827ccb0eea8a706c4c34a16891f84e7b'); //12345
define('NAME', 'Rodrigo Calovi');

$senha = filter_input(INPUT_POST, 'txtSenha', FILTER_SANITIZE_STRING);

if(PASS==md5($senha)){
    $_SESSION['logado']=1;
    setcookie('nome',NAME,time()+3600,'/');

    header('Location: painel.php');
} else {
    echo 'Acesso-negado!';

    header('Location: negado.php');
}


//echo md5($senha);
