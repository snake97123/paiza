<?php 

$n = intval(trim(fgets(STDIN)));
$s = trim(fgets(STDIN));

$chars = str_split($s);
sort($chars);

$result = implode("", $chars);

echo $result;