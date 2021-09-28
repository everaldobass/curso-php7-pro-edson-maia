<?php

   // Upload de Arquivos

  if(isset($_POST['btn_enviar'])){
      // Tipos de arquivos permitidos 
      $tipos_permitidos = ['jpg', 'jpeg', 'gif', 'png',
      'PNG','GIF', 'JPEG', 'jpg'];
      // Bloco de código tem que recortar
      //$extensao = pathinfo($_FILES['arquivo']['name'],
      //PATHINFO_EXTENSION );

      // Variavel para receber os arquivos
      $quantidade_arquivos = count($_FILES['arquivo']['name']);

      // Contador para controlar envio dos arquivos
      $contador = 0;

      // Bloco while
      while($contador < $quantidade_arquivos){

      // Bloco de código tem que recortar
      $extensao = pathinfo($_FILES['arquivo']['name'][$contador],
      PATHINFO_EXTENSION );

      // Ver array de tipos a extensao do arquivo
      if(in_array($extensao, $tipos_permitidos)) {

       $pasta = "arquivos/";
       $temporario = $_FILES['arquivo']['tmp_name'][$contador];  
       // Definindo novo nome
       $novo_nome = uniqid().".$extensao";
       // Fazer upload do arquivo
       if(move_uploaded_file($temporario, $pasta.$novo_nome)){

        echo "Ulpload realizado";

       } else {
        echo "Falha no Ulpload";
       }


      } else {
          echo "Tipo de arquivo não permitido";
      } // Fim array

      $contador++; // incremento do contator

    }// Fim do while

  } // Fim if isset

?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload de Arquivos</title>
</head>
<body>

<h1> Upload de Arquivos no PHP </h1>
<!----enctype="multipart/form-data"----->
<form action="upload.php" method="POST"  enctype="multipart/form-data">

        <input type="file" name="arquivo[]" multiple />
        <button type="submit" name="btn_enviar"> Enviar </button>
</form>
    
</body>
</html>