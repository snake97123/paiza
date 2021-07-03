<?php
    $inputs = explode(" ", trim(fgets(STDIN)));
    
    $n = $inputs[0];
    $border_line = $inputs[1];
    $refuse_number = $inputs[2];
    $count=0;
    
    for ($i = 0; $i < $n; $i++) {
         $point_arrays[] = trim(fgets(STDIN));
    }
    
  rsort($point_arrays);
//   print_r($point_arrays);
   
  array_splice($point_arrays, 0, $refuse_number);
//   print_r($point_arrays);
  foreach ($point_arrays as $value) {
      if($value >= $border_line){
          $count++;
      }
  }
  
  echo $count;
?>