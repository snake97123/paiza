<?php

list($N, $K) = array_map('intval', explode(' ', trim(fgets(STDIN))));
$A = [];
for ($i = 0; $i < $N; $i++) {
    $A[] = intval(trim(fgets(STDIN)));
}

function canAchieveHeight($height, $N, $K, $A){
    $requiredFuel = 0;
    for ($i = 0; $i < $N; $i++) {
        $requiredFuel += intval(ceil($height / $A[$i]));
    }
    return $requiredFuel <= $K;
}

$low = 0;
$high = $K * max($A) + 1;

while($high - $low > 1) {
  $mid = intdiv($low + $high, 2);
  if(canAchieveHeight($mid, $N, $K, $A)) {
    $low = $mid;
  } else {
    $high = $mid;
  }
}
 
echo $low . "\n";

?>