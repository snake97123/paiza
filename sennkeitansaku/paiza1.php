<?php
   $n = trim(fgets(STDIN));
   $num_array = explode(" ", trim(fgets(STDIN)));
   
   $max_value = max($num_array);
   $min_value = min($num_array);
   
   echo $max_value . " " . $min_value;
?>