<?php

// Sessões em PHP
session_start();

$_SESSION['nome'] = "Everaldo";
$_SESSION['idade'] = 40;

echo "<h2> Sessão </h2>";

echo "Nome: {$_SESSION['nome']}, Idade: {$_SESSION['idade']} anos <br>";

echo "ID" . session_id();