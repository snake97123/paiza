<?php

function gcd($a, $b) {
    return $b ? gcd($b, $a % $b) : $a;
}

function lcm($a, $b) {
    return $a * $b / gcd($a, $b);
}

$N = intval(trim(fgets(STDIN)));
$numbers = [];
for ($i = 0; $i < $N; $i++) {
    $numbers[] = intval(trim(fgets(STDIN)));
}

$result = $numbers[0];
for ($i = 1; $i < $N; $i++) {
    $result = lcm($result, $numbers[$i]);
}

echo $result . "\n";

?>