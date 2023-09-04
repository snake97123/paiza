<?php

list($n, $k) = array_map('intval', explode(" ", trim(fgets(STDIN))));
$a = array_map('intval', explode(" ", trim(fgets(STDIN))));
$a[] = 0;

function check($x, $a, $n, $k) {
  $sum = $n * ($n + 1) / 2;
  $cnt = 0;
  for($i = 0; $i <= $n; $i++) {
    if($a[$i] > $x) {
      $cnt++;
    } else {
      $sum -= $cnt * ($cnt + 1) / 2;
      $cnt = 0;
    }
  }
  if($sum < $k) {
    return 0;
  } else {
    return 1;
  }
}

$left = 0;
$right = 1 << 24;
while($right - $left > 1) {
  $mid = intdiv($left + $right, 2);
  if (check($mid, $a, $n, $k)) {
    $right = $mid;
  } else {
    $left = $mid;
  }
}

echo $right . "\n";
?>