<?php
   $inputs = explode(" ", trim(fgets(STDIN)));
   $n = $inputs[0];
   $k = $inputs[1];
   
   $arrays = explode(" ", trim(fgets(STDIN)));
   
   sort($arrays);
   
   echo $arrays[$k - 1];
?>