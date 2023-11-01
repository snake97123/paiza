<?php

list($N, $M, $X, $Y, $K) = array_map('intval', explode(' ', trim(fgets(STDIN))));
$types = array_map('intval', explode(' ', trim(fgets(STDIN))));

$graph = [];
for($i = 0; $i < $M; $i++) {
  list($a, $b) = array_map('intval', explode(' ', trim(fgets(STDIN))));
  $graph[$a][] = $b;
  $graph[$b][] = $a;
}

// 幅優先探索
function bfs($start, $graph, $types, $Y, $Z) 
{
    $N = count($graph);
    $queue = new SplQueue();
    $visited = array_fill(1, $N, false);
    $distance = array_fill(1, $N, -1);
    $queue->enqueue($start);
    $distance[$start] = 0;
    $visited[$start] = true;

    // 幅優先探索のためのキュー処理　頂点間の距離は５とする
    while(!$queue->isEmpty()) {
      $current = $queue->dequeue();
      foreach($graph[$current] as $next) {
          if(!$visited[$next]) {
              $queue->enqueue($next);
              $visited[$next] = true;
              $distance[$next] = $distance[$current] + 5;
          }
      }
  }

  // 結果の取得
  $result = [];
  for($i = 1; $i <= $N; $i++) {
    if($distance[$i] <= $Y && $types[$i - 1] == $Z) {
      $result[] = $i;
    } 
  }

   return $result;
}

// 幅優先探索の結果の取得と出力
$result = bfs($X, $graph, $types, $Y, $Z);
echo count($result) . "\n";
foreach($result as $facility) {
  echo $facility . "\n";
}
?>