<?php
   [$n, $a, $b] = explode(" ", trim(fgets(STDIN)));
   
   $dp = [];
   for($i = 0; $i <= $n; $i++){
       $dp[$i] = 0;
   }
   $dp[0] = 0;
   $dp[1] = $a;
   
   for($i = 2; $i <= $n + 1; $i++){
       $dp[$i] = min($dp[$i - 2] + $b, $dp[$i - 1] + $a);
   }
   print_r($dp[$n]);
?>