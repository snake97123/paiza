<?php
    // 自分の得意な言語で
    // Let's チャレンジ！！
   $test = explode(" ", trim(fgets(STDIN)));
   $map_line = $test[0];
   $map_row = $test[1];
   $y = $test[2];
   $x = $test[3];
   $direction = $test[4];
   $map_arrays = array();
  
   
   for ($i = 0; $i < $map_line; $i++) {
        $input = str_split(trim(fgets(STDIN)));
        array_push($map_arrays, $input);
   }
  
   
   if ($direction == 'E') {
       if ($map_arrays[$y][$x + 1] != '#' && $x + 1 <= $map_row) {
           echo 'Yes';
       } else {
           echo 'No';
       }
       
   }
   
   if ($direction == 'S') {
       if ($map_arrays[$y + 1][$x] != '#' && $y + 1 <= $map_line) {
           echo 'Yes';
       } else {
           echo 'No';
       }
       
   }
    if ($direction == 'W') {
       if ($map_arrays[$y][$x - 1] != '#' && $x - 1 >= 0) {
           echo 'Yes';
          } else {
            echo 'No';
        }
        
    }
    if ($direction == 'N') {
        if ($map_arrays[$y - 1][$x] != '#' && $y - 1 >= 0) {
            echo 'Yes';
        } else {
            echo 'No';
        }
        
    }
   
 ?>