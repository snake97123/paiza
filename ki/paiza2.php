<?php
// 頂点の数 N を受け取る
$N = intval(fgets(STDIN));

// 隣接リストの初期化
$adjacencyList = array_fill(0, $N, []);

// 辺の情報を受け取り、隣接リストを更新
for ($i = 0; $i < $N - 1; $i++) {
    list($a, $b) = explode(" ", trim(fgets(STDIN)));
    $adjacencyList[$a - 1][] = $b;
    $adjacencyList[$b - 1][] = $a;
}

// 隣接リストを出力
for ($i = 0; $i < $N; $i++) {
    sort($adjacencyList[$i]);
    echo implode(" ", $adjacencyList[$i]) . PHP_EOL;
}
?>