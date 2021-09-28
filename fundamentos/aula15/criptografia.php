<?php

// Site que quebra senhas do PHP

$senha = 123;

// Base64 - Codifica - decodifica - Não Recomendavel.
$senha_base64 = base64_encode($senha);
$senha_decodifica = base64_decode($senha_base64);

echo "<p> Senha base64: $senha_base64 </p>";
echo "<p> Senha decodificada: $senha_decodifica </p>";

// MD5 - Codifica.
$senha_md5 = md5($senha);
echo "<p> Senha MD5: $senha_md5 </p>";


// SAH1 - Codifica.
$senha_sha1 = sha1($senha);
echo "<p> Senha SHA1: $senha_sha1 </p>";


// Password Hash Recomendavel.
$senha_hash = password_hash($senha, PASSWORD_DEFAULT);
echo "<p> Senha com password: $senha_hash </p>";



