<?php

//medir tempo de execução / execution time

$start = microtime(true);

for($i = 10; $i <= 100; $i++) {
    echo "hello world \n";
}

$end = microtime(true);

echo "\n tempo decorrido = " . ((float)$end - (float)$start);