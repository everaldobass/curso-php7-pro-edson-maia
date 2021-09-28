<?php


// Validações
if(isset($_POST['btn_enviar'])){

    $nome  = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $idade = $_POST['idade'];
    $peso  = $_POST['peso'];


}

// Array de Erros
$erros = [];

// Sanitizar - limpeza dos campos

$nome = filter_input(INPUT_POST, 'nome',
FILTER_SANITIZE_SPECIAL_CHARS
);

$email = filter_input(INPUT_POST, 'email',
FILTER_SANITIZE_EMAIL
);

$senha = filter_input(INPUT_POST, 'senha',
FILTER_SANITIZE_SPECIAL_CHARS
);


$idade = filter_input(INPUT_POST, 'idade',
FILTER_SANITIZE_NUMBER_INT
);


$peso = filter_input(INPUT_POST, 'peso',
FILTER_SANITIZE_NUMBER_FLOAT,
FILTER_FLAG_ALLOW_FRACTION
);

echo "<h1> Dados Cadastrados </h1>";
// Exibir os dados cadastrados
echo "<p> Nome: $nome </p>";
echo "<p> E-mail: $email </p>";
echo "<p> Senha: $senha </p>";
echo "<p> Idade: $idade </p>";
echo "<p> Peso: $peso </p>";

// Filtros Validate apos Sanitizar

if(!filter_var($nome, FILTER_SANITIZE_EMAIL)){
    $erros[] = "E-mail inválido";

}

if(!filter_var($senha, FILTER_SANITIZE_SPECIAL_CHARS)){
    $erros[] = "Senha inválida";

}

if(!filter_var($idade, FILTER_SANITIZE_NUMBER_INT)){
    $erros[] = "Informe o número inteiro";

}
if(!filter_var($idade, FILTER_SANITIZE_NUMBER_FLOAT)){
    $erros[] = "Informe um número decimal";

}

if(!empty($erros)){
    foreach($erros as $erro){
       echo "<li> $erro </li>";

    }
    
} else {
    echo "<li> Dados corretos! </li>";   
}

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tela de Validação </title>
</head>
<body>

<h1> Validações com PHP </h1>
<form action="validar.php" method="POST">

<label>
    Nome:
        <input type="text" name="nome" placeholder="Digite seu Nome "  autofocus/>
    </label>


    <label>
    E-mail:
        <input type="email" name="email" placeholder="Informe seu E-mail" />
    </label><br/>
    
    <label>
    Senha:
    <input type="password" name="senha" placeholder="Informe sua Senha" />
    </label><br/>

    <label>
    Idade:
    <input type="number" name="idade"  min="1" max="120" step="1"  />
    :Anos
    </label><br/>


    <label>
    Peso:
    <input type="number" name="peso"  min="2.4" max="200.0" step="1"  />
    :kilos
    </label><br/>

    <button type="submit" name="bt_enviar"> Enviar </button>
</form>

    
</body>
</html>