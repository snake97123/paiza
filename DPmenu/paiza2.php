<?php
[$x, $d] = explode(" ", trim(fgets(STDIN)));
$Q = trim(fgets(STDIN));
$num_array = [];
$num_array[0] = $x;
for($i = 1; $i < 1000; $i++){
  $num_array[$i] = $num_array[$i - 1] + $d; 
}

for($i = 0; $i < $Q; $i++){
  $index = trim(fgets(STDIN));
  echo($num_array[$index - 1] . PHP_EOL);
}