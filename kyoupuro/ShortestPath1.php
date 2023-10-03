<?php 

list($n, $m) = array_map('intval', explode(' ', trim(fgets(STDIN))));

//隣接グラフの作成
$graph = array_fill(1, $n, []);
for($i = 0; $i < $m; $i++) {
  list($a, $b) = array_map('intval', explode(' ', trim(fgets(STDIN))));
  $graph[$a][] = $b;
  $graph[$b][] = $a;
}

//訪問済みかどうかを管理する配列
$visited = array_fill(1, $n, false);

//頂点からの距離を記録する配列
$distance = array_fill(1, $n, -1);

//頂点の距離は０
$distance[1] = 0;

//queueを用いた幅優先探索
$queue = new SplQueue();
$queue->enqueue(1);
$visited[1] = true;

//queueが空になるまで探索を続ける 次はここから作業を再開する。
while(!$queue->isEmpty()) {
  $v = $queue->dequeue();
  foreach($graph[$v] as $next_v) {
    if(!$visited[$next_v]) {
      $queue->enqueue($next_v);
      $visited[$next_v] = true;
      $distance[$next_v] = $distance[$v] + 1;
    }
  }
}

//結果出力
for($i = 1; $i <= $n; $i++) {
  echo  $distance[$i] . "\n";
}
?>