<?php
$N = trim(fgets(STDIN));

$A = array_map('intval', explode(' ', trim(fgets(STDIN))));
$B = array_map('intval', explode(' ', trim(fgets(STDIN))));

$dp = array_fill(0, $N + 1, -(10 ** 9));
$dp[1] = 0;

for ($i = 1; $i < $N; $i++){
  $dp[$A[$i - 1]] = max($dp[$A[$i - 1]], $dp[$i] + 100);
  $dp[$B[$i - 1]] = max($dp[$B[$i - 1]], $dp[$i] + 150);
}

echo $dp[$N];