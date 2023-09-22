<?php
list($H, $W) = array_map('intval', explode(' ', trim(fgets(STDIN))));
list($y, $x) = array_map('intval', explode(' ', trim(fgets(STDIN))));
list($goal_x, $goal_y) = array_map('intval', explode(' ', trim(fgets(STDIN))));

$grid = [];
while($line = trim(fgets(STDIN))) {
  $grid[] = str_split(trim($line));
}

$directions = [[-1, 0], [1, 0], [0, -1], [0, 1]];

$visited = array_fill(0, $H, array_fill(0, $W, false));

$queue = new SplQueue();
$queue->enqueue([$y, $x]);
$visited[$y][$x] = true;

while(!$queue->isEmpty()) {
  list($cy, $cx) = $queue->dequeue();

  foreach($directions as $dir) {
    $ny = $cy + $dir[0];
    $nx = $cx + $dir[1];

    if($ny >= 0 && $ny < $H && $nx >= 0 && $nx < $W && $grid[$ny][$nx] !== '#' && !$visited[$ny][$nx]) {
      $visited[$ny][$nx] = true;
      $grid[$ny][$nx] = "*";
      $queue->enqueue([$ny, $nx]);
    }
  }
}
if($grid[$goal_y][$goal_x] === "*"){
    echo "Yes" . PHP_EOL;
} else {
    echo "No" . PHP_EOL;
}

?>