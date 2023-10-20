<?php

list($N, $M, $X) = explode(' ', trim(fgets(STDIN)));
$graph = [];
for($i = 0; $i < $M; $i++) {
  list($a, $b) = explode(' ', trim(fgets(STDIN)));
  $graph[$a][] = $b;
  $graph[$b][] = $a;
}

foreach($graph as $vertex => $neighbors) {
  sort($graph[$vertex]);
}

$visited = array_fill(1, $N, false);

function dfs($start, $graph, &$visited){
    $visited[$start] = true;
    echo $start . "\n";
    foreach($graph[$start] as $next){
        if(!$visited[$next]){
            dfs($next, $graph, $visited);
        }
    }
}

dfs($X, $graph, $visited)
?>