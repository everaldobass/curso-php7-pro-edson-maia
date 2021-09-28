<?php
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