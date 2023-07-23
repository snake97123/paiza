<?php

list($H, $W) = array_map('intval', explode(' ', trim(fgets(STDIN))));
$map = array_fill(0, $H, '');
for($i = 0; $i < $H; $i++) {
    $map[$i] = trim(fgets(STDIN));
}

$dp = array_fill(0, $W + 1, array_fill(0, $H + 1, 0));
for ($i = 0; $i < $H; $i++) {
    for($j = 0; $j < $W; $j++) {
      if($i == 0 && $j == 0) {
        $dp[$i][$j] = 1;
      } else {
        $dp[$i][$j] = 0;
        if($i>=1 && $map[$i-1][$j] == '.') $dp[$i][$j] += $dp[$i-1][$j];
        if($j>=1 && $map[$i][$j-1] == '.') $dp[$i][$j] += $dp[$i][$j-1];
      }
    }
}
echo $dp[$H-1][$W-1];