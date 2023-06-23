<?php
 
list($H, $W, $N) = array_map('intval', explode(' ', trim(fgets(STDIN))));
$grid1 = array_fill(0, $H + 2, array_fill(0, $W + 2, 0));
$grid2 = array_fill(0, $H + 2, array_fill(0, $W + 2, 0));
for($i = 1; $i <= $N; $i++) {
  list($A, $B, $C, $D) = array_map('intval', explode(' ', trim(fgets(STDIN))));
  $grid1[$A][$B]++;
  $grid1[$C + 1][$D + 1]++;
  $grid1[$A][$D + 1]--;
  $grid1[$C + 1][$B]--;
}

for($i = 1; $i <= $H; $i++) {
  for($j = 1; $j <= $W; $j++) {
    $grid2[$i][$j] = $grid2[$i][$j - 1] + $grid1[$i][$j];
  }
}

for($i = 1; $i <= $H; $i++) {
  for($j = 1; $j <= $W; $j++) {
    $grid2[$i][$j] = $grid2[$i - 1][$j] + $grid2[$i][$j];
  }
}

for ($i = 1; $i <= $H; $i++) {
    for ($j = 1; $j <= $W; $j++) {
        if ($j >= 2) {
            echo " ";
        }
        echo $grid2[$i][$j];
    }
    echo PHP_EOL;
}

?>