<?php 

$filePath = $_SERVER['argv'][1];
$fileContents = file_get_contents($filePath);
$lines = explode("\n", trim($fileContents));
list($n, $m) = array_map('intval', explode(' ', $lines[0]));

// list($n, $m) = array_map('intval', explode(' ', trim(fgets(STDIN))));
$grid = [];
for ($i = 0; $i < $n; $i++) {
$grid[] = $lines[$i + 1];
  // $grid[] = trim(fgets(STDIN));
}


function countComponents($grid, $n, $m) {
    $visited = array_fill(0, $n, array_fill(0, $m, false));
    $count = 0;

    for ($i = 0; $i < $n; $i++) {
        for ($j = 0; $j < $m; $j++) {
            if (!$visited[$i][$j]) {
                dfs($grid, $visited, $i, $j, $n, $m, $grid[$i][$j]);
                $count++;
            }
        }
    }

    return $count;
}


function dfs($grid, &$visited, $i, $j, $n, $m, $color) {
    if ($i < 0 || $j < 0 || $i >= $n || $j >= $m || $visited[$i][$j] || $grid[$i][$j] != $color) {
        return;
    }

    $visited[$i][$j] = true;

    dfs($grid, $visited, $i + 1, $j, $n, $m, $color);
    dfs($grid, $visited, $i - 1, $j, $n, $m, $color);
    dfs($grid, $visited, $i, $j + 1, $n, $m, $color);
    dfs($grid, $visited, $i, $j - 1, $n, $m, $color);
}


$minComponents = PHP_INT_MAX;
$colors = ['R', 'G', 'B'];
foreach ($colors as $from) {
    foreach ($colors as $to) {
        if ($from != $to) {
            $newGrid = $grid;
            for ($i = 0; $i < $n; $i++) {
                $newGrid[$i] = str_replace($from, $to, $newGrid[$i]);
            }
            $minComponents = min($minComponents, countComponents($newGrid, $n, $m));
        }
    }
}

echo $minComponents . "\n";

?>