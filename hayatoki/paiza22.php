<?php
   $n = trim(fgets(STDIN));
   $total_ang = 180 * ($n - 2);
   $answer = floor($total_ang / $n);
   
   echo $answer;
?>