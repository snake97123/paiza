<?php

$N = trim(fgets(STDIN));
// 2次元配列を初期化
$X = array_fill(0, $N, 0);
$Y = array_fill(0, $N, 0);

for($i = 0; $i < $N; $i++) {
    [$X[$i], $Y[$i]] = array_map('intval', explode(' ', trim(fgets(STDIN))));
}

$Q = trim(fgets(STDIN));
$A = array_fill(0, $Q, 0);
$B = array_fill(0, $Q, 0);
$C = array_fill(0, $Q, 0);
$D = array_fill(0, $Q, 0);

for($i = 0; $i < $Q; $i++) {
    [$A[$i], $B[$i], $C[$i], $D[$i]] = array_map('intval', explode(' ', trim(fgets(STDIN))));
}

$S = array_fill(0, 1501, array_fill(0, 1501, 0));
for ($i = 0; $i < $N; $i++) {
    $S[$X[$i]][$Y[$i]]++;
}

$T = array_fill(0, 1501, array_fill(0, 1501, 0));
for ($i = 1; $i < 1501; $i++) {
  for ($j = 1; $j < 1501; $j++) {
    $T[$i][$j] = $T[$i][$j - 1] + $S[$i][$j];
  }
}

for($j = 1; $j < 1501; $j++) {
  for($i = 1; $i < 1501; $i++) {
    $T[$i][$j] += $T[$i - 1][$j];
  }
}

for ($i = 0; $i < $Q; $i++) {
  $total = $T[$C[$i]][$D[$i]] - $T[$A[$i] - 1][$D[$i]] - $T[$C[$i]][$B[$i] - 1] + $T[$A[$i] - 1][$B[$i] - 1];
  echo $total . "\n";
}
?>