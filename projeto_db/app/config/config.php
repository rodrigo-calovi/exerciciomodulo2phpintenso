<?php

define('BASE','/banco-online/');

$router = [
    //view
  'saldo' =>  'ContaController@saldo',  
  'extrato' =>  'ContaController@saldo', 
  'deposito' =>  'ContaController@saldo',  
  'saque' =>  'ContaController@saldo',  
  'cadastro' =>  'LoginController@cadastro'
  

];