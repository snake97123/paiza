<?php

list($H, $W, $y, $x) = array_map('intval', explode(' ', trim(fgets(STDIN))));

$dx = [0, 1, 0, -1];
$dy = [-1, 0, 1, 0];

function dfs($x, $y, $depth, $H, $W, $dx, $dy) {
  if($depth == 3) {
    echo $y . " " . $x . "\n";
    return;
  }

  for($i = 0; $i < 4; $i++) {
    $nx = $x + $dx[$i];
    $ny = $y + $dy[$i];
    if($ny >= 0 && $ny < $H && $nx >= 0 && $nx < $W) {
      dfs($nx, $ny, $depth + 1, $H, $W, $dx, $dy);
    }
  }
}

dfs($x, $y, 0, $H, $W, $dx, $dy);

?>