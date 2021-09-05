<?php
   $goal_count = 0;
   [$m, $n] = explode(" ", trim(fgets(STDIN)));
   for ($i = 0; $i < $m; $i++) {
        $arrays[$i] = explode(" ", trim(fgets(STDIN)));
   }

   $search_array = explode(" ", trim(fgets(STDIN)));
   
   for ($i = 0; $i < $m; $i++) {
       $count = 0;
      for ($j = 0; $j < $n; $j++) {
           if($arrays[$i][$j] == $search_array[$j]){
               $count++;
           }
           if($count == $n){
               $goal_count = $i + 1;
           }
      }
   }
   
   echo $goal_count;
?>