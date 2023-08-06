<?php

function lower_bound($array, $value) {
    $left = 0;
    $right = count($array);

    while ($left < $right) {
        $mid = intdiv($left + $right, 2);

        if ($array[$mid] < $value) {
            $left = $mid + 1;
        } else {
            $right = $mid;
        }
    }

    return $left;
}

function upper_bound($array, $value) {
    $left = 0;
    $right = count($array);

    while ($left < $right) {
        $mid = intdiv($left + $right, 2);

        if ($array[$mid] <= $value) {
            $left = $mid + 1;
        } else {
            $right = $mid;
        }
    }

    return $left;
}

$n = intval(fgets(STDIN));
$A = array_map('intval', explode(' ', trim(fgets(STDIN))));
$q = intval(fgets(STDIN));
$queries = [];

for ($i = 0; $i < $q; $i++) {
    $queries[] = array_map('intval', explode(' ', trim(fgets(STDIN))));
}

sort($A);

foreach ($queries as $query) {
    [$l, $r] = $query;

    $start = lower_bound($A, $l);
    $end = upper_bound($A, $r);

    echo ($end - $start) . "\n";
}

?>
