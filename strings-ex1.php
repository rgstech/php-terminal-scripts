<?php 

// $str_re = sprintf(" Nome e  %s", "Rodrigo");

// echo $str_re;

// $res = htmlspecialchars(">");

// echo $res;

// $url = 'q=' . urlencode("Rodrigo Oliveira");

// echo $url;

$url = "http://127.0.0.1:5500/aula02_especificidade.html";


$remote = fopen($url, 'r'); 
$html   = fread($remote, 250); // read up to 1 MB of HTML
    
echo $html;

fclose($remote);

