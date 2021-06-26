<?php
  $inputs = explode(" ", trim(fgets(STDIN)));
  $y = $inputs[0];
  $x = $inputs[1];
  $target_y = $inputs[2];
  $target_x = $inputs[3];
  
  for ($i = 0; $i <= $y; $i++) {
         $map_arrays[$i] = str_split(trim(fgets(STDIN)));
   }
   
   if ($map_arrays[$target_y - 1][$target_x - 1] == "#") {
       echo "Yes";
   } else {
       echo "No";
   } 
?>