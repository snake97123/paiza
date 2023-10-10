<?php
$N = intval(trim(fgets(STDIN)));
$directBosses = array_map('intval', explode(' ', trim(fgets(STDIN))));

$tree = array_fill(1, $N, []);
for ($i = 2; $i <= $N; $i++) {
    $tree[$directBosses[$i - 2] - 1][] = $i - 1;
}

$cache = array_fill(0, $N, -1);

function countSubordinates($node, &$tree, &$cache) {
    if ($cache[$node] != -1) {
        return $cache[$node];
    }

    $count = 0;
    foreach ($tree[$node] as $child) {
        $count += countSubordinates($child, $tree, $cache) + 1;
    }
    $cache[$node] = $count;
    return $count;
}

$results = [];
for ($i = 0; $i < $N; $i++) {
    $results[] = countSubordinates($i, $tree, $cache);
}

echo implode(' ', $results) . PHP_EOL;
