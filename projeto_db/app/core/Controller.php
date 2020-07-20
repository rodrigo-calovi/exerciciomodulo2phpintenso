<?php

    namespace app\core;

    class Controller {

        protected function view(string $view, $params = []){

            $loader = new \Twig\Loader\FilesystemLoader('app/view/');

            $twig = new \Twig\Environment($loader, []);
            echo $twig->render($view . '.twig.php', $params);
        }
    }