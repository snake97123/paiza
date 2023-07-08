<?php

list($N, $M, $Q) = array_map('intval', explode(' ', trim(fgets(STDIN))));

$X = array_fill(0, $N+1, array_fill(0, $M+1, 0));
$sum = array_fill(0, $N+1, array_fill(0, $M+1, 0));

for($i = 1; $i <= $N; $i++) {
  $line = array_map('intval', explode(' ', trim(fgets(STDIN))));
  for($j = 1; $j <= $M; $j++) {
    $X[$i][$j] = $line[$j - 1];
  }
}

for($i = 1; $i <= $N; $i++) {
  for($j = 1; $j <= $M; $j++) {
    $sum[$i][$j] = $X[$i][$j] + $sum[$i - 1][$j] + $sum[$i][$j - 1] - $sum[$i - 1][$j - 1];
  }
}

for($i = 0; $i < $Q; $i++) {
  list($A, $B, $C, $D) = array_map('intval', explode(' ', trim(fgets(STDIN))));
  $total = $sum[$C + 1][$D + 1] - $sum[$A][$D + 1] - $sum[$C + 1][$B] + $sum[$A][$B];
  echo $total . "\n";
}