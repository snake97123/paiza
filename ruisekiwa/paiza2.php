<?php
   function calculateSum($num_array, $start, $end, $array_element_count){
       $cumulative_sum = [];
       $cumulative_sum[0] = $num_array[0];
       for ($i = 1; $i <$array_element_count; $i++) {
           $cumulative_sum[$i] = $cumulative_sum[$i - 1] + $num_array[$i];
       }
       $sum = $cumulative_sum[$end] - $cumulative_sum[$start - 1];
       
       return $sum;
   }


   [$N, $Y, $X] = explode(" ", trim(fgets(STDIN)));
   $num_array = explode(" ", trim(fgets(STDIN)));
   
   $sum = calculateSum($num_array, $Y, $X, $N);
   echo($sum);
?>