<?php

class Item
{

    function __construct()
    {
        echo "chamou constructor" . PHP_EOL;
    }

    function __destruct()
    {
        echo "chamou destructor" . PHP_EOL;
    }
}


$item = new Item();

unset($item);
