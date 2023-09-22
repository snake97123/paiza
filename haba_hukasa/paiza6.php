<?php
list($H, $W) = array_map('intval', explode(' ', trim(fgets(STDIN))));
list($y, $x) = array_map('intval', explode(' ', trim(fgets(STDIN))));
list($goal_y, $goal_x) = array_map('intval', explode(' ', trim(fgets(STDIN))));

$grid = [];
while($line = trim(fgets(STDIN))) {
  $grid[] = str_split(trim($line));
}

$directions = [[-1, 0], [1, 0], [0, -1], [0, 1]];
$distances = array_fill(0, $H, array_fill(0, $W, PHP_INT_MAX));

$visited = array_fill(0, $H, array_fill(0, $W, false));

$queue = new SplQueue();
$queue->enqueue([$y, $x, 0]);
$visited[$y][$x] = true;

while(!$queue->isEmpty()) {
  list($cy, $cx, $distance) = $queue->dequeue();
  $distances[$cy][$cx] = $distance;

  foreach($directions as $dir) {
    $ny = $cy + $dir[0];
    $nx = $cx + $dir[1];

    if($ny >= 0 && $ny < $H && $nx >= 0 && $nx < $W && $grid[$ny][$nx] !== '#' && !$visited[$ny][$nx]) {
      $visited[$ny][$nx] = true;
      $grid[$ny][$nx] = "*";
      $queue->enqueue([$ny, $nx, $distance + 1]);
    }
  }
}
if($grid[$goal_y][$goal_x] === "*"){
    echo $distances[$goal_y][$goal_x];
} else {
    echo "No" . PHP_EOL;
}

?>