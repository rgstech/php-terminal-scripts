<?php


// $folder = './';

// $fh = opendir($folder);

// if ($fh == false) {

//     exit("nao pode abrir o diretorio/arquivo");
// }

// // $entry = readdir($fh);

// // echo "$entry \n";



// while (false !== ($entry = readdir($fh))) {

//     echo "$entry\n";
// }

// closedir($fh);


// $filename = "arquivo.txt";

// if (file_exists($filename)) {

//     exit("The file already exists\n");
// }

// $fh = fopen($filename, 'w');

// if ($fh === false) {

//     exit("Cannot create file\n");
// }

// fprintf($fh , "hello world!");

// echo "Successfully created file\n";

// fclose($fh);




function myecho(string $msg="") {
    fprintf(STDOUT, $msg);
}


myecho("hello world");