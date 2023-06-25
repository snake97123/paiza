<?php 

list($N, $X) = array_map('intval', explode(' ', trim(fgets(STDIN))));
$number_list = array_map('intval', explode(' ', trim(fgets(STDIN))));

$left = 0;
$right = $N - 1;

while($left <= $right) {
  $mid = floor(($left + $right) / 2);
  if($number_list[$mid] == $X) {
    echo $mid + 1;
    exit;
  } elseif($number_list[$mid] < $X) {
    $left = $mid + 1;
  } else {
    $right = $mid - 1;
  }
}

?>