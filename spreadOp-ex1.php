<?php 

//spread operator example / operador sprea exemplo

$frutas = ['Maça','Banana','Laranja'];
$frutas2 = ['Abacate','Melancia', ...$frutas];

print_r($frutas2);