<?php
session_start();
define('PASS', '827ccb0eea8a706c4c34a16891f84e7b');

$senha = filter_input(INPUT_POST, 'txtSenha', FILTER_SANITIZE_STRING);


//echo md5($senha);
