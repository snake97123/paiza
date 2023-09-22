<?php
list($H, $W, $N) = array_map('intval', explode(' ', trim(fgets(STDIN))));
list($y, $x) = array_map('intval', explode(' ', trim(fgets(STDIN))));

$grid = [];
while($line = trim(fgets(STDIN))) {
  $grid[] = str_split(trim($line));
}

$directions = [[-1, 0], [1, 0], [0, -1], [0, 1]];

$visited = array_fill(0, $H, array_fill(0, $W, false));
$distances = array_fill(0, $H, array_fill(0, $W, PHP_INT_MAX));

$queue = new SplQueue();
$queue->enqueue([$y, $x]);
$visited[$y][$x] = true;
$distances[$y][$x] = 0;

while(!$queue->isEmpty()) {
  list($cy, $cx) = $queue->dequeue();

  foreach($directions as $dir) {
    $ny = $cy + $dir[0];
    $nx = $cx + $dir[1];

    if($ny >= 0 && $ny < $H && $nx >= 0 && $nx < $W && $grid[$ny][$nx] !== '#' && !$visited[$ny][$nx]) {
      $visited[$ny][$nx] = true;
      $distances[$ny][$nx] = $distances[$cy][$cx] + 1;
      $queue->enqueue([$ny, $nx]);
    }
  }
}

for ($i = 0; $i < $H; $i++) {
  for ($j = 0; $j < $W; $j++) {
    if ($grid[$i][$j] === "#") {
      echo "#";
    } elseif ($distances[$i][$j] <= $N) {
      echo "*";
    } else {
      echo ".";
    }
  }
  echo PHP_EOL;
}

?>