<?php

list($n, $k) = array_map('intval', explode(' ', trim(fgets(STDIN))));
$number_list = array_map('intval', explode(' ', trim(fgets(STDIN))));
$R = array_fill(0, $n, 0);

for($i = 0; $i < $n; $i++) {
  if($i == 0) {
    $R[$i] = 0;
  } else {
    $R[$i] = $R[$i - 1];
  }

  while($R[$i] < $n - 1 && $number_list[$R[$i] + 1] - $number_list[$i] <= $k) {
    $R[$i]++;
  }
}

$ans = 0;
for($i = 0; $i < $n; $i++) {
  $ans += $R[$i] - $i;
}

echo $ans;

?>