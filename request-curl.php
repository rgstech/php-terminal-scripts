<?php

// Iniciamos a função do CURL:
$ch = curl_init('http://localhost:8080/clientes');

curl_setopt_array($ch, [

    // Equivalente ao -X:
    CURLOPT_CUSTOMREQUEST => 'GET',

    // Equivalente ao -H:
    CURLOPT_HTTPHEADER => [
        'JsonOdds-API-Key: yourapikey'
    ],

    // Permite obter o resultado
    CURLOPT_RETURNTRANSFER => 1,
]);

$resposta = json_decode(curl_exec($ch), true);

var_dump($resposta);
curl_close($ch);
