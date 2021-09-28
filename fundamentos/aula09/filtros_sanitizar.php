<?php

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

