<?php
  $N = trim(fgets(STDIN));
  $number_arrays = explode(" ", trim(fgets(STDIN)));
  
  $n = trim(fgets(STDIN));
  for ($i = 0; $i < $n; $i++) {
       [$first, $last] = explode(" ", trim(fgets(STDIN)));
       $total = 0;
       for ($i = $first; $i <= $last; $i++) {
            $total += $number_arrays[$i];
            // echo $total . "\n";
       }
  }
?>