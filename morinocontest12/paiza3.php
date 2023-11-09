<?php

$N = intval(trim(fgets(STDIN)));
$graph = [];
for($i = 0; $i < $N; $i++) {
  list($a, $b) = array_map('intval', explode(' ', trim(fgets(STDIN))));
  $graph[$a][] = $b;
  $graph[$b][] = $a;
}

// 幅優先探索
$visited = array_fill(0, 3, false);
$queue = new SplQueue();
$queue->enqueue(0);
$visited[0] = true;
while(!$queue->isEmpty()) {
  $current = $queue->dequeue();
  foreach($graph[$current] as $next) {
    if(!$visited[$next]) {
      $queue->enqueue($next);
      $visited[$next] = true;
    }
  }
}

if($visited[2] == true) {
  echo "Yes";
} else {
  echo "No";
} 

?>