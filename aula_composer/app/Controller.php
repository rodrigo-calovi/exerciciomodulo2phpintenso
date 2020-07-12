<?php

namespace App;

class Controller {

    public function __construct(){
       // echo 'Construtor';
    }

    function show(){
        echo "Que comece o show!";
    }

    function view($view, $params = []) {
        $loader = new \Twig\Loader\FilesystemLoader('view/');
        $twig = new \Twig\Environment($loader, [
       // 'cache' => 'cache/',
        ]);

echo $twig->render($view, $params);
    }

}