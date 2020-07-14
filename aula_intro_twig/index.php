<?php 

require_once('vendor/autoload.php');

define('VAR_NAME', 'Calovi');

use app\controller\Controller;

new Controller('teste', [
    'idade' => 18,
    'nome' => 'Rodrigo',
    'cidades' => [
        'Porto Alegre',
        'São Paulo',
        'Alegrete',
        'São Marcos',
        'Iepê',
        'Cidreira'
    ],
    'mensagem' => 'O rato roeu a roupa do rei de Roma.'
]);