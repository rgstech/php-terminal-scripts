<?php


$numeros = array(1,2,5,6);

$numerosPad = array_pad($numeros,8,1);

print_r($numerosPad);

print PHP_EOL;

$cliente = ["nome"=>"Rodrigo", 
             "email" => "rod@email.com",
             "tel" => "71 9999 9999"];


extract($cliente);

echo " nome: {$nome} , email: {$email}, telefone: {$tel}" . PHP_EOL;


$produto = "Mouse usb";
$marca = "YOS";
$cor = "cinza";

$prod = compact('produto', 'marca', 'cor');

print_r($prod);






