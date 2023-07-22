<?php 
// 2次元上のいもす法で解答する。
//入力値の獲得
list($N, $M, $K) = array_map('intval', explode(" ", trim(fgets(STDIN))));
$maps = array_fill(0, $N+1, array_fill(0, $M+1, 0));

// いもす法での加算
for($i = 0; $i < $K; $i++) {
    list($a, $b, $c, $d) = array_map('intval', explode(" ", trim(fgets(STDIN))));
//K 個の長方形領域の左上の座標 (a_i, b_i) と右下の座標 (c_i, d_i) が与えられます。それぞれの範囲に対して、その範囲に含まれるマスに 1 を加算していきます。
    $maps[$b - 1][$a - 1] += 1;
    $maps[$d][$c] += 1;
    $maps[$b - 1][$c] -= 1;
    $maps[$d][$a - 1] -= 1;
}

for($i = 0; $i < $N + 1; $i++) {
  for($j = 0; $j < $M; $j++) {
      $maps[$i][$j + 1] += $maps[$i][$j];
  }
}

for($i = 0; $i < $N; $i++) {
  for($j = 0; $j < $M + 1; $j++) {
      $maps[$i + 1][$j] += $maps[$i][$j];
  }
}

$max_value = 0;

foreach($maps as $line) {
  $max_value = max($max_value, max($line));
}

echo $max_value . PHP_EOL;

?>