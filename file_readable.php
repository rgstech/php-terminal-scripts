<?php



//$arq = fopen('teste.php', 'r') or die('erro ao abrir aquivo');

if (is_writeable('teste.php')) {

    echo "pode escrever no arquivo \n";
} else {

    echo "nao pode escrever no arquivo \n";
}

if (is_readable('teste.php')) {

    echo "pode ler no arquivo";
} else {

    echo "nao pode ler no arquivo";
}
