<?php
   $inputs = explode(" ", trim(fgets(STDIN)));
   $H = $inputs[0];
   $W = $inputs[1];
   
   for ($i = 0; $i < $H; $i++) {
        $arrays[$i] = str_split(trim(fgets(STDIN)));
   }
//   print_r($arrays);
   
   for ($i = 0; $i < $H; $i++) {
        for ($j = 0; $j < $W; $j++) {
             if($arrays[$i][$j] == "*"){
                 $first_position_H = $i;
                 $first_position_W = $j;
             }
        }
   }
   
//   echo $first_position_H . $first_position_W;
   
?>