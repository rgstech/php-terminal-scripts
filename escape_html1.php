<?php



$str = "<script> alert('hello world'); </script>";

echo htmlspecialchars($str); 
echo "\n \n \n";
echo htmlentities($str);

echo "\n";

