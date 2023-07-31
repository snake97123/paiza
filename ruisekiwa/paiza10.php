<?php

list($N, $K) = array_map('intval', explode(' ', trim(fgets(STDIN))));
$num_array = array_map('intval', explode(' ', trim(fgets(STDIN))));

$sum = 0;
$max_length = 0;
$left = 0;

for ($right = 0; $right < $N; $right++) {
    $sum += $num_array[$right];
    while ($sum > $K) {
        $sum -= $num_array[$left];
        $left++;
    }
    $max_length = max($max_length, $right - $left + 1);
}

echo $max_length;