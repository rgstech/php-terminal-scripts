<?php

$file = $argv[1];

$tokens = token_get_all(file_get_contents($file));

foreach ($tokens as $token) {

	if (is_array($token)) {

		echo "Line {$token[2]}: ", token_name($token[0]), ' (', trim($token[1]), ')', PHP_EOL;
	}
	
}
