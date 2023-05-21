<?php
   [$day_period, $day_consecutive_period] = explode(" ", trim(fgets(STDIN)));
   $each_day_egg_count = explode(" ", trim(fgets(STDIN)));
   $period_count = $day_period - $day_consecutive_period + 1;
   $max_total_egg_count = 0;
   for($i = 0; $i < $period_count; $i++) {
       $total_egg_count = 0;
       for($j = $i; $j < $i + $day_consecutive_period; $j++) {
           $total_egg_count += $each_day_egg_count[$j];
       }
       if($total_egg_count > $max_total_egg_count){
           $max_total_egg_count = $total_egg_count;
       }
   }
   
   echo $max_total_egg_count;
?>