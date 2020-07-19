<?php
function dd($param = []){
    echo '<pre>';
    print_r($param);
    echo '</pre>';
}

//$_SESSION['logado'] = true;
function security(){
    if(!isset($_SESSION['logado']) || !$_SESSION['logado']){
        header('Location: ' . BASE);
    }
}
