<?php
    $input_arrays = explode(" ", trim(fgets(STDIN)));
    $y = $input_arrays[0];
    $x = $input_arrays[1];
    
    for ($i = 0; $i < $y; $i++) {
         $map_arrays[$i] = str_split(trim(fgets(STDIN)));
    }
    
  for ($i = 0; $i < $y; $i++) {
        for ($j = 0; $j < $x; $j++) {
             if ($map_arrays[$i][$j] == '*') {
                 $target_y = $i;
                 $target_x = $j;
                //  $map_arrays[$i-1][$j] = '*';
                //  $map_arrays[$i+1][$j] = '*';
                //  $map_arrays[$i][$j-1] = '*';
                //  $map_arrays[$i][$j+1] = '*';
             }
        }
  }
                 $map_arrays[$target_y-1][$target_x] = '*';
                 $map_arrays[$target_y+1][$target_x] = '*';
                 $map_arrays[$target_y][$target_x-1] = '*';
                 $map_arrays[$target_y][$target_x+1] = '*';
  
  for ($i = 0; $i < $y; $i++) {
         for ( $j = 0; $j < $x; $j++){
             echo $map_arrays[$i][$j];
         }
         echo "\n";
     }

?>