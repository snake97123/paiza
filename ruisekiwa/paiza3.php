<?php 

list($N, $K) = array_map('intval', explode(' ', trim(fgets(STDIN))));
$number_list = explode(" ", trim(fgets(STDIN)));

$sum = array_fill(0, $N+1, 0);
for($i = 1; $i <= $N; $i++) {
  $sum[$i] = $sum[$i - 1] + $number_list[$i - 1];
}

$max = 0;
for($i = 0; $i <= $N - $K; $i++) {
  $total = $sum[$i + $K] - $sum[$i];
  if($total > $max) {
    $max = $total;
  }
}

echo $max;
?>