<?php 

$n = trim(fgets(STDIN));
$num_arrays = explode(" ", trim(fgets(STDIN)));

for($i = 0; $i <= $n - 1; $i++){
  $min_index = $i;
  $min = $num_arrays[$i];
  for($j = $i + 1; $j <= $n - 1; $j++){
    if($min > $num_arrays[$j]){
      $min_index = $j;
      $min = $num_arrays[$j];
    }
  }
[$num_arrays[$i], $num_arrays[$min_index]] = [$min, $num_arrays[$i]];
}

print_r($num_arrays);
?>