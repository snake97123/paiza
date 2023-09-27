<?php

list($N, $X) = array_map('intval', explode(" ", trim(fgets(STDIN))));
$adj = [];
for($i = 0; $i < $N; $i++) {
  list($a, $b) = array_map('intval', explode(" ", trim(fgets(STDIN))));
  $adj[$a][] = $b;
  $adj[$b][] = $a;
}

$queue = new SplQueue();
$visited = array_fill(0, $N, false);
$distances = array_fill(0, $N, -1);

$queue->enqueue($X);
$visited[$X] = true;
$distances[$X] = 0;

while(!$queue->isEmpty()) {
  $current = $queue->dequeue();

  foreach ($adj[$current] as $neighbor) {
    if(!$visited[$neighbor]) {
      $visited[$neighbor] = true;
      $distances[$neighbor] = $distances[$current] + 1;
      $queue->enqueue($neighbor);
    }
  }
}

for($i 1; $i <= $N; $i++) {
  if($distances[$i] === 3) {
    echo $i . "\n";
  }
}

?>