<?php

//頂点の数を受け取る
$N = intval(trim(fgets(STDIN)));

//隣接リストの初期化
$adjacencyList = array_fill(0, $N, []);

//辺の情報を受け取り、隣接リストを更新
for($i = 0; $i < $N - 1; $i++){
    list($a, $b) = array_map('intval', explode(" ", trim(fgets(STDIN))));
    $adjacencyList[$a - 1][] = $b;
    $adjacencyList[$b - 1][] = $a;
}

//葉を求める。接続する辺が一つのみなので、隣接リストの要素数が1の頂点が葉である。
$leaves = [];
for($i = 0; $i < $N; $i++) {
  if(count($adjacencyList[$i]) === 1) {
    $leaves[] = $i + 1;
  }
}

//葉を改行ありで出力する。
echo implode("\n", $leaves) . "\n";