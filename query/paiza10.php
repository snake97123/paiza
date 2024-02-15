<?php

$num_length = 10000;
$square_root_length = sqrt($num_length);
for($i = 0; $i < $square_root_length; $i++) {
  $max_num = 0;
  for($j = 0; $j < $square_root_length; $j++) {
    $num = intval(trim(fgets(STDIN)));
    $max_num = max($max_num, $num);
  }
  echo $max_num . "\n";
}

?>