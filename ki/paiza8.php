<?php

list($N, $K, $R) = array_map('intval', explode(" ", trim(fgets(STDIN))));
$parent = array_fill(0, $N + 1, []);

for($i = 0; $i < $N - 1; $i++) {
  list($a, $b) = array_map('intval', explode(" ", trim(fgets(STDIN))));
  $parent[$b][] = $a;
}

for($i = 0; $i < $K; $i++) {
  $v = intval(trim(fgets(STDIN)));
  if($i == $K) {
      echo implode(" ", $parent[$v]);
  }
  echo implode(" ", $parent[$v]) . "\n";
}