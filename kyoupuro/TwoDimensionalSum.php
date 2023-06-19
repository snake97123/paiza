<?php 

list($H, $W) = array_map('intval', explode(' ', trim(fgets(STDIN))));

$X = array_fill(0, $H+1, array_fill(0, $W+1, 0));
$sum = array_fill(0, $H+1, array_fill(0, $W+1, 0));

for ($i = 1; $i <= $H; $i++) {
    $line = array_map('intval', explode(' ', trim(fgets(STDIN))));
    for($j = 1; $j <= $W; $j++){
      $X[$i][$j] = $line[$j - 1];
    }
}

for($i = 1; $i <= $H; $i++) {
  for($j = 1; $j <= $W; $j++) {
    $sum[$i][$j] = $X[$i][$j] + $sum[$i - 1][$j] + $sum[$i][$j - 1] - $sum[$i - 1][$j - 1];
  }
}

$Q = intval(fgets(STDIN));

for ($i = 0; $i < $Q; $i++) {
  list($A, $B, $C, $D) = array_map('intval', explode(' ', trim(fgets(STDIN))));
  $total = $sum[$C][$D] - $sum[$A - 1][$D] - $sum[$C][$B - 1] + $sum[$A - 1][$B - 1];
  echo $total . "\n";
}

?>