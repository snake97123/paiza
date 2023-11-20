<?php

function readGrid($n) {
    $grid = [];
    for ($i = 0; $i < $n; $i++) {
        $grid[] = str_split(trim(fgets(STDIN)));
    }
    return $grid;
}

function dfs($grid, &$visited, $i, $j, $color, &$componentId, $id) {
    if ($i < 0 || $j < 0 || $i >= count($grid) || $j >= count($grid[0]) || $visited[$i][$j] || $grid[$i][$j] != $color) {
        return;
    }

    $visited[$i][$j] = true;
    $componentId[$i][$j] = $id;

    dfs($grid, $visited, $i + 1, $j, $color, $componentId, $id);
    dfs($grid, $visited, $i - 1, $j, $color, $componentId, $id);
    dfs($grid, $visited, $i, $j + 1, $color, $componentId, $id);
    dfs($grid, $visited, $i, $j - 1, $color, $componentId, $id);
}

list($n, $m, $k) = array_map('intval', explode(' ', trim(fgets(STDIN))));
$grid = readGrid($n);

$visited = array_fill(0, $n, array_fill(0, $m, false));
$componentId = array_fill(0, $n, array_fill(0, $m, -1));

$id = 0;
for($i = 0; $i < $n; $i++) {
  for($j = 0; $j < $m; $j++) {
    if(!$visited[$i][$j]) {
      dfs($grid, $visited, $i, $j, $grid[$i][$j], $componentId, $id);
      $id++;
    }
  }
}

for($i = 0; $i < $k; $i++) {
  list($a, $b, $c, $d) = array_map('intval', explode(' ', trim(fgets(STDIN))));
  $a--; $b--; $c--; $d--;

  if($componentId[$a][$b] == $componentId[$c][$d]) {
    echo "Yes" . PHP_EOL;
  } else {
    echo "No" . PHP_EOL;
  }
}

?>