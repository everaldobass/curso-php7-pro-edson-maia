<?php

   // Upload de Arquivos

  if(isset($_POST['btn_enviar'])){

      $tipos_permitidos = ['jpg', 'jpeg', 'gif', 'png',
      'PNG','GIF', 'JPEG', 'jpg'];

      $extensao = pathinfo($_FILES['arquivo']['name'],
      PATHINFO_EXTENSION );

      // Ver array de tipos a extensao do arquivo
      if(in_array($extensao, $tipos_permitidos)) {

       $pasta = "arquivos/";
       $temporario = $_FILES['arquivo']['tmp_name'];  
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

        <input type="file" name="arquivo" />
        <button type="submit" name="btn_enviar"> Enviar </button>
</form>
    
</body>
</html>