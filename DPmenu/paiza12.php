<?php

[$n, $x, $a, $y, $b] = explode(" ", trim(fgets(STDIN)));

$dp = [];
for($i = 0; $i <= $n + $y; $i++){
  $dp[$i] = 10000000;
}

$dp[0] = 0;

for($i = $x; $i <= $n + $y; $i++){
  if($i >= $x){
    $dp[$i] = min($dp[$i], $dp[$i - $x] + $a);
  }

  if($i >= $y){
    $dp[$i] = min($dp[$i], $dp[$i - $y] + $b);
  }
}
$min = 10000000;
for($j = $n; $j <= $n + $y; $j++){
    if($dp[$j] < $min){
        $min = $dp[$j];
    }
}
echo $min;
?>