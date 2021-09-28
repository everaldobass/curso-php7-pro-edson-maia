<?php

// Exibe Erros
$erros = [];

if(!empty($erros)){
    foreach($erros as $erro){
       echo "<li> $erro </li>";

    }
    
} else {
    echo "<li> Dados corretos! </li>";   
}



