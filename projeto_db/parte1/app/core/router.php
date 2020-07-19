<?php

    $router = [
        //view
      'saldo' =>  'ContaController@saldo',  
      'extrato' =>  'ContaController@saldo', 
      'deposito' =>  'ContaController@saldo',  
      'saque' =>  'ContaController@saldo',  
      'cadastro' =>  'LoginController@cadastro',  
      

    ];


    $url = filter_input(INPUT_GET, 'url', FILTER_SANITIZE_STRING);

    $controller = 'LoginController';
    $metodo = 'login';

    if($url == null | !$url) {
        return;
    }

    foreach($router as $key => $value){
        die($key . ' - ' . $value);
    }