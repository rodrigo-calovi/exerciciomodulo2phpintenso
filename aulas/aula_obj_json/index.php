<?php 

$filename = 'teste.txt';

$cidades = [
    'Iepê',
    'Assis',
    'Dracena',
    'Presidente Prudente',
    'Assis'
];

//gravar($filename, $cidades);
$dados = ler($filename);
var_dump($dados);

function gravar($filename, $cidades){
    $fp = fopen($filename,'w');
    fwrite($fp, json_encode($cidades));
    fclose($fp);
}

function ler($filename) {
    $fp = fopen($filename, 'r');
    $conteudo = fread($fp, filesize($filename));
    fclose($fp);
    return json_decode($conteudo);
}
