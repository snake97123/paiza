<?php 

[$n, $x, $a, $y, $b, $z, $c] = explode(" ", trim(fgets(STDIN)));
$dp = [];

for($i = 0; $i <= $n + $z; $i++){
  $dp[$i] = 10000000;
}

$dp[0] = 0;

for($i = 0; $i <= $n + $z; $i++){
  if($i >= $x){
    $dp[$i] = min($dp[$i], $dp[$i - $x] + $a);
  }

  if($i >= $y){
    $dp[$i] = min($dp[$i], $dp[$i - $y] + $b);
  }

  if($i >= $z){
    $dp[$i] = min($dp[$i], $dp[$i - $z] + $c);
  }
}
$min = 100000000;
for ($i = $n; $i <= $n + $z; $i++){
    if($dp[$i] < $min){
      $min = $dp[$i];
    }
}

echo $min;