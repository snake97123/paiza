<?php

function bfs($graph, $x) {
  $queue = new SplQueue();
  $queue->enqueue($x);
  $dist = array_fill(0, count($graph), -1);
  $dist[$x] = 0;

  while(!$queue->isEmpty()) {
    $now = $queue->dequeue();
    foreach($graph[$now] as $next) {
      if($dist[$next] != -1) continue;
      $dist[$next] = $dist[$now] + 1;
      $queue->enqueue($next);
    }
  }
}

list($n, $k) = array_map('intval', explode(' ', trim(fgets(STDIN))));
$graph = $rev_graph = array_fill(0, $n, array());

for($i = 0; $i < $n - 1; $i++) {
  list($p, $c) = array_map('intval', explode(' ', trim(fgets(STDIN))));
  $p--;
  if($c == 1) {
    $graph[$p][] = 0;
    $rev_graph[0][] = $p;
  } else {
    $graph[$p][] = $i + 1;
    $rev_graph[$i + 1][] = $p;
  }
} 

$dist = bfs($graph, 0);
$rev_dist = bfs($rev_graph, 0);

for($i = 0; $i < $k; $i++) {
  list($x, $y) = array_map('intval', explode(' ', trim(fgets(STDIN))));
  $x--; $y--;

  if($rev_dist[$x] === - 1 || $dist[$y] === -1) {
   echo "-1\n";
  } else {
    echo $rev_dist[$x] + $dist[$y] . "\n";
  }
}

?>