<?php

list($N, $S) = array_map("intval", explode(" ", trim(fgets(STDIN))));
$num_array = array_map("intval", explode(" ", trim(fgets(STDIN))));
array_unshift($num_array, 0);
$dp = array_fill(0, $N + 1, array_fill(0, $S + 1, 0));

$dp[0][0] = true;
for($i = 1; $i <= $S; $i++) {
  $dp[0][$i] = false;
}

for($i = 1; $i <= $N; $i++) {
  for($j = 0; $j <= $S; $j++) {
    if($j < $num_array[$i]) {
      if($dp[$i - 1][$j] == true) {
        $dp[$i][$j] = true;
      } else {
        $dp[$i][$j] = false;
      }
    }
    if($j >= $num_array[$i]) {
      if($dp[$i - 1][$j] == true || $dp[$i - 1][$j - $num_array[$i]] == true) {
        $dp[$i][$j] = true;
      } else {
        $dp[$i][$j] = false;
      }
    }
  }
}

if($dp[$N][$S] == true) {
  echo "Yes";
} else {
  echo "No";
}

?>