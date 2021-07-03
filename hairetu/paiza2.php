<?php
  $n = trim(fgets(STDIN));

  $sbjects_omomi = explode(" ", trim(fgets(STDIN)));
//   print_r($sbjects_omomi);
  for ($i = 0; $i < $n; $i++) {
       $tensuu[] = explode(" ", trim(fgets(STDIN)));
  }
 
 
 for ($i = 0; $i < $n; $i++) {
     $sum = 0;
     for ($j = 0; $j < 5; $j++) {
         $sum += $sbjects_omomi[$j] * $tensuu[$i][$j];
     } 
     $sums[] = $sum;
 }
     echo max($sums);
?>