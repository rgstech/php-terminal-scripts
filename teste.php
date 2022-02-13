<?php

//echo "hello world";
ob_start();
phpinfo();

$content = ob_get_contents();

ob_end_clean();


echo substr($content, 1,10);