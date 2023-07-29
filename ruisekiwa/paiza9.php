<?php 

list($N, $K) = array_map('intval', explode(' ', trim(fgets(STDIN))));
$num_array = array_map('intval', explode(' ', trim(fgets(STDIN))));
$count = 0;

for($i = 0; $i < $N; $i++ ) {
  for($j = 0; $j < $N; $j++) {
    $sum = 0;
    for($k = $i; $k <= $j; $k++) {
      $sum += $num_array[$k];
    }
    if($sum <= $K && $sum != 0) {
      $count++;
    }
  }
}

echo $count;

?>