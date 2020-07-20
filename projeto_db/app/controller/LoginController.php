<?php

    namespace app\controller;

    use app\core\Controller;

    class LoginController extends Controller{
        public function __construct(){
           // echo 'home login';
        }

        public function login(){
           // echo 'LOGIN';
           $this->view('externa/login');
        }

    }
