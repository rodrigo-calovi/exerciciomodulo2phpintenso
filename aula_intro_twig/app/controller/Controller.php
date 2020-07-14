<?php
    namespace app\controller;

    class Controller {

        public function __construct(string $view, $params = [])
        {


            $loader = new \Twig\Loader\FilesystemLoader('app/view/');
            $twig = new \Twig\Environment($loader, []);
            /*$twig = new \Twig\Environment($loader, [
                'cache' => '/path/to/compilation_cache',
            ]);*/

            $twig->addGlobal('VAR_NAME', VAR_NAME);

            //view/teste
            echo $twig->render($view . '.twig.php', $params);
        }

    }