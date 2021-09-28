<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tela de Login</title>
</head>
<body>

<h1> Tela de Login </h1>
<form action="recebe_login.php" method="POST">

    
    <label>
    E-mail:
        <input type="email" name="email" placeholder="Informe seu E-mail" />
    </label>
    
    <label>
    Senha:
    <input type="password" name="senha" placeholder="Informe sua Senha" />
    </label>

    <button type="submit"> Logar </button>
</form>

    
</body>
</html>