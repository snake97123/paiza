<?php

list($n, $x, $y) = array_map('intval', explode(' ', trim(fgets(STDIN))));
$ki = array_fill(1, $n, []);
for($i = 1; $i < $n; $i++) {
  list($a, $b) = array_map('intval', explode(' ', trim(fgets(STDIN))));
  $ki[$a][] = $b;
  $ki[$b][] = $a;
}

$queue = new SplQueue();
$visited = array_fill(1, $n, false);
$distance = array_fill(1, $n, -1);
$distance[$x] = 0;
$visited[$x] = true;

$queue->enqueue($x);

while(!$queue->isEmpty()) {
  $current = $queue->dequeue();

  foreach($ki[$current] as $neighbor) {
    if(!$visited[$neighbor]) {
      $visited[$neighbor] = true;
      $distance[$neighbor] = $distance[$current] + 1;
      $queue->enqueue($neighbor);
    }
  }
}

echo $distance[$y] . "\n";

?>