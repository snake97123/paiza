<?php
  list($H, $W, $N) = array_map('intval', explode(' ', trim(fgets(STDIN))));
  $A= [];
  
  for ($i = 0; $i < $H; $i++) {
      $A[$i] = array_map('intval', explode(' ', trim(fgets(STDIN))));
  }
  
  $P = array_fill(0, $H + 1, array_fill(0, $W + 1, 0));
  for ($i = 1; $i <= $H; $i++) {
    for ($j = 1; $j <= $W; $j++) {
        $P[$i][$j] = $A[$i - 1][$j - 1] + $P[$i - 1][$j] + $P[$i][$j - 1] - $P[$i - 1][$j - 1];
    }
  }

   for ($query = 0; $query < $N; $query++) {
        list($a, $b, $c, $d) = array_map('intval', explode(' ', trim(fgets(STDIN))));
        $sum = $P[$c][$d] - $P[$a - 1][$d] - $P[$c][$b - 1] + $P[$a - 1][$b - 1];
        echo $sum . "\n";
    }

?>