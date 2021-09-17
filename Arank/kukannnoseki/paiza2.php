<?php
  $N = trim(fgets(STDIN));
  $number_arrays = explode(" ", trim(fgets(STDIN)));
  for ($i = 0; $i < $N; $i++) {
       if($i != 0){
           $number_arrays_sum[$i] = $number_arrays[$i] + $number_arrays_sum[$i - 1];
       } else {
           $number_arrays_sum[$i] = $number_arrays[$i];
       }
  }
//   print_r($number_arrays_sum);
     $n = trim(fgets(STDIN));
     for ($i = 0; $i < $n; $i++) {
          [$first, $last] = explode(" ", trim(fgets(STDIN)));
          if($first == 0){
              $total = $number_arrays_sum[$last];
          } else {
              $total = $number_arrays_sum[$last] - $number_arrays_sum[$first - 1];
          }
          echo $total . "\n";
     }
//   for ($i = 0; $i < $n; $i++) {
//       [$first, $last] = explode(" ", trim(fgets(STDIN)));
//       $total = 0;
//       for ($j = $first; $j <= $last; $j++) {
//             $total += $number_arrays[$j];
            
//       }
//       echo $total . "\n";
//   }
?>