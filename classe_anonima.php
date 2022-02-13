<?php


$cliente =  new class('Rodrigo')
{

	function __construct($nome)
	{
		$this->nome = $nome;
	}

	function getNome()
	{
		return $this->nome;
	}
};


$nome = $cliente->getNome();

echo $nome;


//$cli = new $cliente('Rodrigo');
