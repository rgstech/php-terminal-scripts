<?php

// a lot of tests/exercices with php arrays
// varios exercicios com arrays em PHP

// $nomes[] = "Rodrigo";
// $nomes[] = "Rafaela";
// $nomes[] = "Jucycleide";
// $nomes[] = "Flavia";


// print_r($nomes);

// echo PHP_EOL;

// echo range(1,10)[3];

// var_dump(range('a','z'));

// echo sizeof(['Rodrigo','Rafaela']);

// list($nome, $email, $telefone) = ['Rodrigo','rod@email.com','7112345678']; // equivalente ao destructor do javascript 

// echo $nome . PHP_EOL;
// echo $email . PHP_EOL;
// echo $telefone . PHP_EOL;


// $marray = ['nome' => 'Rodrigo', 'email' => 'rod@email.com', 'endereco'=>'rua das arvores' , 'renda' => '12.000'];

// $arChuck = array_chunk($marray, 2 ,true);

// print_r($arChuck);


// $cliente = ['nome' =>'Rodrigo','email' => 'rod@email.com'];

// extract($cliente );

// echo $cliente_nome;
// extract($cliente, EXTR_PREFIX_ALL, "cliente");

// echo $cliente_nome;

// $nome = 'Rodrigo';
// $email = 'rod@email.com';
// $endereco = 'rua arvores';

// $ar = compact("nome","email","endereco");
// print_r($ar);

// $clientes = [ 'Rodrigo', 'Amanda', 'Flavia', 'Rachel', 'Rafaela', 'Tricia' ];

// next($clientes);
// echo current($clientes) . PHP_EOL;
// echo key($clientes) . PHP_EOL;

// print_r(each($clientes));
// echo current($clientes);

// while(list($key, $value) = each($clientes)) {
//     echo "{$key} is {$value}" . PHP_EOL;
// }

// array_walk($clientes, function($v, $k){ echo "$k - $v" . PHP_EOL; } );

// $addItUp = function ($runningTotal, $currentValue) {

//     $runningTotal += $currentValue * $currentValue;
//     return $runningTotal;

// };

// $numbers = array(2, 3, 5, 7);

// $total = array_reduce($numbers, $addItUp);

// echo $total;


// if (in_array('Rodrigo', $clientes))
//     echo "esta no array";
// else
//     echo "não esta no array";

// $numeros = [1,2,5,5,5,5];

// print_r(array_sum($numeros));

// function startsWith ($string, $startString)
// {
//     $len = strlen($startString);
//     return (substr($string, 0, $len) === $startString);
// }

// print_r(array_filter($clientes, function($el) { return startsWith($el, 'R'); } ) );

// function arrayPush(&$ar, $v) {

//     $ar[] = $v;
// }

// arrayPush($clientes, "Roberta");
// array_push($clientes, "Bianca");

// print_r($clientes);

// class Clientes implements Iterator
// {

//     private $position = 0;
//     private $array = [];

//     public function __construct()
//     {
//         $this->position = 0;
//     }

//     public function add(string $cliente)
//     {

//         $this->array[$this->position] = $cliente;
//         $this->position++;
//     }
//     function rewind(): void
//     {
//         $this->position = 0;
//     }
//     function current() 
//     {
//         return $this->array[$this->position];
//     }
//     function key() 
//     {
//         return $this->position;
//     }
//     function next(): void
//     {
//         $this->position += 1;
//     }
//     function valid(): bool
//     {
//         return isset($this->array[$this->position]);
//     }
// }


// $cli = new Clientes();

// $cli->add("Rodrigo");
// $cli->add("Rachel");
// $cli->add("Bianca");
// $cli->add("Maria");

// foreach ($cli as $key => $value) {
//     echo "$key - $value " . PHP_EOL;
// }
