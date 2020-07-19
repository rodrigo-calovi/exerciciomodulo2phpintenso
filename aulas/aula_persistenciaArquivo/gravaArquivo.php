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

    //mostra conteudo
    echo $conteudo;
}

function escrever($filename){          
   
    //mensage a ser inserida
   $text = 'Abre somente para escrita; coloca o ponteiro do arquivo no comeco do arquivo
   e reduz o comprimento do arquivo para zero. Se arquivo não existir, tenta-criá-lo';
    
    //abre ára escrita
    $fp = fopen('dados/' . $filename, 'w' );

    //escreve no arquivo
    fwrite($fp,$text);

    //fecha arquivo
    fclose($fp);
}