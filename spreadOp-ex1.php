<?php 

//spread operator example / operador spread exemplo

$frutas = ['Maça','Banana','Laranja'];
$frutas2 = ['Abacate','Melancia', ...$frutas];

print_r($frutas2);