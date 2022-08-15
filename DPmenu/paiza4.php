<?php

[$x, $d_1, $d_2] = explode(" ", trim(fgets(STDIN)));
$Q = trim(fgets(STDIN));
$num_array = [];
$num_array[0] = 0;
$num_array[1] = $x;
for ($i = 2; $i <= 1000; $i++){
  if ($i % 2 == 0){
    $num_array[$i] = $num_array[$i - 1] + $d_2;
  } else {
    $num_array[$i] = $num_array[$i - 1] + $d_1;
  }
}

for ($i = 0; $i < $Q; $i++){
  $index = trim(fgets(STDIN));
  echo($num_array[$index] . PHP_EOL);
}