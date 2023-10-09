<?php

list($N, $M, $X, $Y) = array_map('intval', explode(' ', trim(fgets(STDIN))));
$graph = [];
for($i = 0; $i < $M; $i++) {
  list($a, $b) = array_map('intval', explode(' ', trim(fgets(STDIN))));
  $graph[$a][] = $b;
  $graph[$b][] = $a;
}

$visited = array_fill(0, $N, false);
$distance = array_fill(0, $N, -1);
$visited[$X] = true;
$distance[$X] = 0;

$queue = new SplQueue();
$queue->enqueue($X);
while(!$queue->isEmpty()) {
  $current = $queue->dequeue();
  foreach($graph[$current] as $neighbor) {
    if(!$visited[$neighbor]) {
      $visited[$neighbor] = true;
      $distance[$neighbor] = $distance[$current] + 1;
      $queue->enqueue($neighbor);
    }
  }
}

if($distance[$Y] === -1) {
  echo "-1\n";
} else {
  echo $distance[$Y] . "\n";
}

?>