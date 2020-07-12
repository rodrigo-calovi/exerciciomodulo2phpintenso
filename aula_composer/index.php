<?php 

require_once('vendor/autoload.php');

use App\Controller;

$controller = new Controller();

$dados = [
    'nome' => 'Rodrigo Calovi'
];


$controller->view('contato/teste.php', $dados);
//$controller->show();                 
