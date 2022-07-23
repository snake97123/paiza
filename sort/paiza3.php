<?php 

$n = trim(fgets(STDIN));
$num_arrays = explode(" ", trim(fgets(STDIN)));

for($i = 0; $i <= $n - 2; $i++ ){
  for($j = $n - 1; $j >= $i + 1; $j--){
     if($num_arrays[$j] < $num_arrays[$j - 1]){
      [$num_arrays[$j], $num_arrays[$j - 1]] = [$num_arrays[$j - 1], $num_arrays[$j]];
     }
  }
  foreach($num_arrays as $key => $value){
      if($key === $n - 1){
          echo $value;
      } else {
          echo $value . " ";
      }
  }
  echo "\n";
}