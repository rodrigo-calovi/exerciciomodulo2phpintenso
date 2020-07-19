<?php

    namespace app\controller;

    use app\controller\Controller;

    class Conta extends Controler{

        public function __construct(){
            echo 'construtor CONTA';
        }

        //### VIEW #### 

        public function saldo(){
            $this->view('interna/saldo');
        }

        //### INTERNAL ####
    }