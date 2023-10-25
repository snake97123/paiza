<?php

list($N, $M) = explode(' ', trim(fgets(STDIN)));
$edges = [];
for($i = 0; $i < $M; $i++) {
  list($a, $b) = explode(' ', trim(fgets(STDIN)));
  $edges[$a][] = $b;
  $edges[$b][] = $a;
}

function dfs($node, $edges, &$visited) {
  $visited[$node] = true;
  foreach($edges[$node] as $next) {
    if(!isset($visited[$next])) {
      dfs($next, $edges, $visited);
    }
  }
}

$visited = [];
$count = 0;
for($i = 1; $i <= $N; $i++) {
  if(!isset($visited[$i])) {
    $count++;
    dfs($i, $edges, $visited);
  }
}

echo $count;
?>