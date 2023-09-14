<?php

function getInput() {
    $N = intval(trim(fgets(STDIN)));
    $adjacent_list = [];
    for ($i = 0; $i < $N - 1; $i++) {
        list($a, $b) = explode(" ", trim(fgets(STDIN)));
        $adjacent_list[$a][] = $b;
        $adjacent_list[$b][] = $a;
    }
    return $adjacent_list;
}

function countTriangles($adjacent_list) {
    $triangle_count = 0;
    foreach ($adjacent_list as $vertex => $adjacents) {
        $count = count($adjacents);
        for ($i = 0; $i < $count; $i++) {
            for ($j = $i + 1; $j < $count; $j++) {
                if (!in_array($adjacents[$j], $adjacent_list[$adjacents[$i]])) {
                    $triangle_count++;
                }
            }
        }
    }
    return $triangle_count;
}

function determineWinner($triangle_count) {
    return ($triangle_count % 2 == 0) ? "erik" : "paiza";
}

$adjacent_list = getInput();
$triangle_count = countTriangles($adjacent_list);
echo determineWinner($triangle_count) . "\n";

?>
