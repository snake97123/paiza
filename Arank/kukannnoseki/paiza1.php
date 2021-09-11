<?php
   $n = trim(fgets(STDIN));
   $number_arrays = explode(" ", trim(fgets(STDIN)));
   $sum = 0;
   
   for ($i = 0; $i < $n; $i++) {
        $sum += $number_arrays[$i];
        echo $sum . "\n";
   }
?>