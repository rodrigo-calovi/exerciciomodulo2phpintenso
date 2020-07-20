<?php

    namespace app\core;

    class Controller {

        public function __construct(){
            echo 'construtor Controller';
        }

        protected function view(string $view, $params){
            $twig = new \Twig\Environment($loader, []);
            
            echo $twig->render($view . '.twig.php', $params);
        }
    }