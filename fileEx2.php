<?php 

$vfile = "loja.db3";

$fsize = filesize($vfile);

$vtype = filetype($vfile);

echo "tamanho do arquivo  $vfile e de $fsize e o tipo e $vtype";

