<?php

list($n, $m) = array_map('intval', explode(' ', trim(fgets(STDIN))));

//隣接グラフの作成
$graph = [];
for($i = 0; $i < $m; $i++) {
  list($a, $b, $c) = array_map('intval', explode(' ', trim(fgets(STDIN))));
  $graph[$a][] = [$b, $c];
  $graph[$b][] = [$a, $c];
}

//Dijkstra法
function dijkstra($start, $graph, $n) {
  $dist = array_fill(1, $n, INF);
  $visited = array_fill(1, $n, false);
  $dist[$start] = 0;
  $queue = new SplPriorityQueue();
  $queue->insert($start, 0);
  while(!$queue->isEmpty()) {
    $v = $queue->extract();
    if($visited[$v]) continue;
    $visited[$v] = true;
    foreach($graph[$v] as $edge) {
      if($dist[$edge[0]] > $dist[$v] + $edge[1]) {
        $dist[$edge[0]] = $dist[$v] + $edge[1];
        $queue->insert($edge[0], -$dist[$edge[0]]); //優先度付きキューに負の値を入れることで最小値を取り出せるようにする。
      }
    }
  }
  return $dist;
}

$distance = dijkstra(1, $graph, $n);

//結果の出力
foreach($distance as $dist) {
  echo $dist == INF ? -1 : $dist;
  echo PHP_EOL;
}
