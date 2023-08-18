<?php

list($N, $K) = array_map('intval', explode(' ', trim(fgets(STDIN))));
$foods = [];
for($i = 0; $i < $N; $i++) {
    $foods[] = array_map('intval', explode(' ', trim(fgets(STDIN))));
}

$low = 1;
$high = 1000000000;

function getTotalCost($day, $foods) {
  $total = 0;
  foreach($foods as $food) {
    list($A, $B, $C, $D) = $food;
    $price1 = $A * $day + $B;
    $price2 = $C * $day + $D;
    $total += min($price1, $price2);
    
  }
  return $total;
}

while($low <= $high) {
  $mid = intdiv($low + $high, 2);
  $cost = getTotalCost($mid, $foods);
  
  if($cost <= $K) {
    $low = $mid + 1;
  } else {
    $high = $mid - 1;
  }
}

echo $high . PHP_EOL;

?>