<?php 

list($N, $K) = array_map('intval', explode(' ', trim(fgets(STDIN))));
$printer_printed_number_list = array_map('intval', explode(' ', trim(fgets(STDIN))));
$left = 0;
$right = 1e9 + 1;


while($left < $right) {
  $mid = floor(($left + $right) / 2);
  $sum = 0;
  for($i = 1; $i <= $N; $i++) {
    $sum += floor($mid / $printer_printed_number_list[$i - 1]);
  } if ($sum < $K) {
    $left = $mid + 1;
  } else {
    $right = $mid;
  }
}

echo $left;
?>