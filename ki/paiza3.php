<?php
//頂点と辺の数を受け取る。
list($N, $K) = array_map('intval', explode(" ", trim(fgets(STDIN))));

//隣接リストの初期化
$adjacencyList = array_fill(0, $N, []);

//辺の情報を受け取り、隣接リストを更新
for($i = 0; $i < $N - 1; $i++){
    list($a, $b) = array_map('intval', explode(" ", trim(fgets(STDIN))));
    $adjacencyList[$a - 1][] = $b;
    $adjacencyList[$b - 1][] = $a;
}

//２つの頂点を結ぶ辺があるかの判定
for($i = 0; $i < $K; $i++) {
  list($x, $y) = array_map('intval', explode(" ", trim(fgets(STDIN))));
  if(in_array($y, $adjacencyList[$x - 1])) {
    echo "YES\n";
  } else {
    echo "NO\n";
  }
}