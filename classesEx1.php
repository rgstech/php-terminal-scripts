<?php

 class System  {


   public function println($str = "")
   {
       echo $str . '\n';
   }


}

 $system =  new System;

 $object = "system";
 
 ${$object}->println("Rodrigo");