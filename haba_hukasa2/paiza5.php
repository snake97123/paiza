<?php

list($N, $M, $X, $Y) = array_map('intval', explode(' ', trim(fgets(STDIN))));
$map = [];
for($i = 0; $i < $M; $i++) {
  list($a, $b) = array_map('intval', explode(' ', trim(fgets(STDIN))));
  $map[$a][] = $b;
  $map[$b][] = $a;
}

function bfs($start, $map, $N) {
  $distances = array_fill(1, $N + 1, PHP_INT_MAX);
  $queue = new SplQueue();
  $queue->enqueue($start);
  $distances[$start] = 0;

  while(!$queue->isEmpty()) {
    $current = $queue->dequeue();

    if(!isset($map[$current])) {
      continue;
    }

    foreach($map[$current] as $neighbor) {
      if($distances[$neighbor] == PHP_INT_MAX) {
        $queue->enqueue($neighbor);
        $distances[$neighbor] = $distances[$current] + 5;
      }
    }
  }
  return $distances;
}

$distanceFromX = bfs($X, $map, $N);
$distanceFromY = bfs($Y, $map, $N);

for($i = 0; $i < $N; $i++) {
  if($distanceFromX[$i] < $distanceFromY[$i]) {
    echo "X is closer\n";
  } elseif ($distanceFromX[$i] > $distanceFromY[$i]){
    echo "Y is closer\n";
  } else {
    echo "Same\n";
  }
    
}

?>