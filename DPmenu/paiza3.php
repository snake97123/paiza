<?php 

  [$x, $d_1, $d_2, $k] = explode(" ", trim(fgets(STDIN)));
  
  $num_array = [];
  $num_array[0] = 0;
  $num_array[1] = $x;
  
  for ($i = 2; $i <= $k; $i++){
    if($i % 2 == 0){
      $num_array[$i] = $num_array[$i - 1] + $d_2;
    } else {
      $num_array[$i] = $num_array[$i - 1] + $d_1;
    }
  }
  echo($num_array[$k]);