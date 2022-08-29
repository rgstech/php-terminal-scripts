<?php

 class System  {


   public function println($str = "")
   {
       echo $str . PHP_EOL;
   }


}

 $system =  new System;

 $object = "system";
 
 ${$object}->println("Rodrigo");