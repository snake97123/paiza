<?php 
list($H, $W) = array_map('intval', explode(" ", trim(fgets(STDIN))));
$graph = [];
for($i = 0; $i < $H; $i++) {
  for($j = 0; $j < $W; $j++) {
    $graph[$i][$j] = ".";
  }
}
$distances = array_fill(0, $H, array_fill(0, $W, PHP_INT_MAX));
$directions = [[-1, 0], [1, 0], [0, -1], [0, 1]];

list($x, $y) = array_map('intval', explode(" ", trim(fgets(STDIN))));
$queue = [[$x, $y, 0]];

while(!empty($queue)) {
  list($cx, $cy, $distance) = array_shift($queue);
  if($distances[$cx][$cy] <= $distance) {
    continue;
  }
  $distances[$cx][$cy] = $distance;

  foreach($directions as $dir) {
    $nx = $cx + $dir[0];
    $ny = $cy + $dir[1];
    if($nx >= 0 && $nx < $H && $ny >= 0 && $ny < $W && $distances[$nx][$ny] > $distance + 1) {
      $queue[] = [$nx, $ny, $distance + 1];
    }
  }
}

for ($i = 0; $i < $H; $i++) {
  for ($j = 0; $j < $W; $j++) {
    echo ($distances[$i][$j] <= 3) ? "*" : ".";
  }
  echo "\n";
}

?>