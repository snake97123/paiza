<?php 

function dfs($i, $graph, &$colorArr){
  $colorArr[$i] = 1;

  $q = new SplQueue();
  $q->enqueue($i);

  while(!$q->isEmpty()) {
    $u = $q->dequeue();

    foreach($graph[$u] as $v) {
      if($colorArr[$v] == -1) {
        $colorArr[$v] = 1 - $colorArr[$u];
        $q->enqueue($v);
      } else if($colorArr[$v] == $colorArr[$u]) {
        return false;
      }
    }
  }
  return true;
}

function checkBipartite($N, $graph) {
  $colorArr = array_fill(1, $N, -1);

  for($i = 1; $i <= $N; $i++) {
    if($colorArr[$i] == -1) {
      if(!dfs($i, $graph, $colorArr)) {
        return 'No';
      }
    }
  }
  return 'Yes';
}

list($N, $M) = explode(' ', trim(fgets(STDIN)));
$graph = [];
for($i = 0; $i < $M; $i++) {
  list($a, $b) = explode(' ', trim(fgets(STDIN)));
  $graph[$a][] = $b;
  $graph[$b][] = $a;
}

echo checkBipartite($N, $graph);

?>