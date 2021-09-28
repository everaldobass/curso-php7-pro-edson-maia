<?php

// Fazer conexão, consulta no banco de dados
$email_bd = "everaldobass@gmail.com";
$senha_bd = "123";

// Verificar se o email e senha estão corretos
if(isset($_POST['btn_logar'])){

    //Iniciar a sessão
    session_start();
   
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    // Capturar o e-mail
    $_SESSION['email'] = $email;


// Verficar os dados do formulario
    if( $email == $email_bd && $senha == $senha_bd){
     // Direcionar para a página 
     header('Location: dashboard.php');   

    } else{
        // Caso e-mail digitado ou senha incorreto
        echo "<p> E-mail ou Senha inválido!  </p>";
    } // fim verificação
} // fim ifsset


?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>

<h1>Login</h1>

<form action="index.php" method="POST">

<label>
    E-mail:
    <input type="email" name="email" />
</label>
<label>
    E-mail:
    <input type="password" name="senha" />
</label>
<button  type="submit" name="btn_logar" > Logar </button>

</form>
    
</body>
</html>