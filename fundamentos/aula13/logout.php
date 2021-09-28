<?php

session_start();  //  Inicia uma nova sessão ou resume uma sessão existente
session_unset();  // Libera todas as variáveis de sessão
session_destroy(); // Destrói todos os dados registrados em uma sessão

echo "<h2> Sessão Logout </h2>";