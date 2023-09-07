<?php

list($N, $K, $R) = array_map('intval', explode(" ", trim(fgets(STDIN))));

$children = array_fill(0, $N - 1, []);

for($i = 0; $i < $N - 1; $i++) {
  list($a, $b) = array_map('intval', explode(" ", trim(fgets(STDIN))));
  $children[$a][] = $b;
}

// print_r($children);

for($i = 0; $i < $K; $i++) {
  $v = intval(trim(fgets(STDIN)));
  sort($children[$v]);
  echo implode(" ", $children[$v]) . "\n";
}
