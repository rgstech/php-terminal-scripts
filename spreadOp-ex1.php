<?php 

//spread operator example / operador spread exemplo

$frutas = ['Maça','Banana','Laranja'];
$frutas2 = ['Abacate','Melancia', ...$frutas];

print_r($frutas2);

class Clientes implements Iterator
{

    private $position = 0;
    private $array = [];

    public function __construct()
    {
        $this->position = 0;
    }

    public function add(string $cliente)
    {

        $this->array[$this->position] = $cliente;
        $this->position++;
    }
    function rewind(): void
    {
        $this->position = 0;
    }
    function current() 
    {
        return $this->array[$this->position];
    }
    function key() 
    {
        return $this->position;
    }
    function next(): void
    {
        $this->position += 1;
    }
    function valid(): bool
    {
        return isset($this->array[$this->position]);
    }
}


$cli = new Clientes();

$cli->add("Rodrigo");
$cli->add("Rachel");
$cli->add("Bianca");
$cli->add("Maria");

// foreach ($cli as $key => $value) {
//     echo "$key - $value " . PHP_EOL;
// }

$nomes = [...$cli];
print_r($nomes);