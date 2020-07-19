<?php

    //nome do arquivo
    $filename = 'academy-satellasoft.txt';

    //verifica se existe diretorio
    if(!is_dir('dados')){
        mkdir('dados');
    }
    
    escrever($filename);

    ler($filename);


function ler($filename){
    ///caminhjo do arquivo
    $path = 'dados/' . $filename;

    //abre o arquivo para leitura
    $fp = fopen($path, 'r');

    //carrega texto do arquivo
    $conteudo = fread($fp, filesize($path));
    //fecha arquivo aberto
    fclose($fp);

    //decodifica
    $arr = json_decode($conteudo);

    //imprime array
    print_r($arr);
    
    //imprime do array
    print_r($arr->nome);
    
    //tratamento de dados
    echo "\r\nNome: " . $arr->nome;
   
    //mostra conteudo
    //echo $conteudo;

}

function escrever($filename){          
   
    $dados = ['nome'=>'Rodrigo', 'email' => 'calovi@gmail.com'];

    //mensage a ser inserida
   $text = json_encode($dados);
    
    //abre ára escrita
    $fp = fopen('dados/' . $filename, 'w' );

    //escreve no arquivo
    fwrite($fp,$text);

    //fecha arquivo
    fclose($fp);
}