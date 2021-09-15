<?php
  $N = trim(fgets(STDIN));
  $number_arrays = explode(" ", trim(fgets(STDIN)));
  
  $n = trim(fgets(STDIN));
  for ($i = 0; $i < $n; $i++) {
       [$first, $last] = explode(" ", trim(fgets(STDIN)));
       $total = 0;
       for ($j = $first; $j <= $last; $j++) {
            $total += $number_arrays[$j];
            
       }
       echo $total . "\n";
  }
?>