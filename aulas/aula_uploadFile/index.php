<?php

date_default_timezone_set("America/Sao_Paulo");

    $path = 'files/';

    if(isset($_FILES['arquivo'])){

      $mime = [
            'image/jpeg',
            'image/png'
      ];

      $rename = true;
      $maxSize = 2000000;

      $file = $_FILES['arquivo'];

        //die();
        //echo '<pre>';
        //print_r($_FILES['file']);
        //die($files['type']);


    //Validamos o MIME Type        
    $type = mime_content_type($file['tmp_name']);
    
        if(!in_array($type, $mime)){
            echo 'MIME Type inválido.';
            return;
        }

        if($file['size']>$maxSize){
            echo "O arquivo é maior que 2M!";
            return;
        }


        $name = $_FILES['arquivo']['name'];

        if($rename){
            $ex = explode('.', $file['name']);
            $name = md5(date('dmYHis') . '.'. end($ex)); 
        }

        move_uploaded_file($_FILES['arquivo']['tmp_name'], $path . $_FILES['arquivo']['name']);
        echo "Arquivo enviado!";
        
    }
?>


<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>UploadsFiles</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
    </head>
    <body>
        <form action="" method="post" enctype="multipart/form-data">
            <input type="file" name="arquivo" accept="image/*">
            <br>
            <input type="submit" value="Enviar">
        </form>
    </body>
</html>