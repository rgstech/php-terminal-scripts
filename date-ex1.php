<?php 

$d=mktime(11, 14, 54, 7, 12, 2022);
echo "Created date is " . date("Y-m-d h:i:sa", $d);

$d2=mktime(11, 14, 54, 7, 20, 2022);
echo PHP_EOL;
echo "Created date is " . date("Y-m-d h:i:sa", $d2);
// echo PHP_EOL;
// echo " Diferenças " . date_diff($d2,$d);

echo PHP_EOL;

$date1=date("2022-07-01");
$date2=date("2022-17-22");
$diff=date_diff($date1, $date2);