<?php

$n = intval(trim(fgets(STDIN)));

// Given n numbers. calculate the sum and average of the numbers.
$sum = 0;
for($i = 0; $i < $n; $i++) {
    $num = intval(trim(fgets(STDIN)));
    $sum += $num;
}
// Decimal points in the average are rounded down.
$average = floor($sum / $n);

echo $sum . PHP_EOL;
echo $average;


?>