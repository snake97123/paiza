<?php
   [$n, $a, $b, $c] = explode(" ", trim(fgets(STDIN)));
   $DP = [];
   for($i = 1; $i <= $n; $i++){
       $DP[$i] = 0;
   }
   
   $DP[0] = 1;
   for($i = 0; $i <= $n; $i++){
       if($i >= $a){
           $DP[$i] += $DP[$i - $a];
       }
       if($i >= $b){
           $DP[$i] += $DP[$i - $b];
       }
       if($i >= $c){
           $DP[$i] += $DP[$i - $c];
       }
   }
   
   echo $DP[$n];
?>