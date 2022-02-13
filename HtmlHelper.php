<?php


class Html {

   
     public static function p($text = "")
     {
         
        echo "<p>$text</p>";
     }


}


Html::p('meu paragrafo');