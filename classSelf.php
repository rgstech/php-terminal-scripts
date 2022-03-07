<?php 

class Cliente {

  public static $empresa= 'Comp';

  public function staticValue() {

    //return self::$empresa;
    return self::$empresa;

  }

  public function getNewObj() {

    
    return new self;

  }

 

  public function nome() {

   
    return 'Rodrigo';

  }
}


$cliente = new Cliente;


echo $cliente->staticValue() . PHP_EOL;




$cliente2 = $cliente->getNewObj();

echo $cliente2->nome();


