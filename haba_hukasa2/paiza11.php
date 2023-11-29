<?php

// $filePath = $_SERVER['argv'][1];
// $fileContents = file_get_contents($filePath);
// $lines = explode("\n", trim($fileContents));

function dfs(&$graph, &$size, $now) {
    foreach ($graph[$now] as $next) {
        dfs($graph, $size, $next);
        $size[$now] += $size[$next];
    }
}

// $n = intval($lines[0]);
$n = intval(trim(fgets(STDIN)));
$graph = array_fill(0, $n, []);
$name = [];
$size = array_fill(0, $n, 0);

for ($i = 0; $i < $n; $i++) {
    // $input = explode(" ", $lines[$i + 1]);
    $input = explode(" ", trim(fgets(STDIN)));
    $name[$i] = $input[0];
    $size[$i] = intval($input[1]);
    $num = intval($input[2]);

    for ($j = 0; $j < $num; $j++) {
        $child = intval($input[3 + $j]) - 1;
        $graph[$i][] = $child;
    }
}

dfs($graph, $size, 0);

for ($i = 0; $i < $n; $i++) {
    echo $name[$i] . " " . $size[$i] . PHP_EOL;
}
?>
