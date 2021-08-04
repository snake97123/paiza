<?php
   [$a, $b] = explode(" ", trim(fgets(STDIN)));
   $x = $a * $a;
   $y = $a * $b;
   $z = $b * $b;
   
   if($x <= $y && $x <= $z){
       echo $x;
   }elseif($y <= $x && $y <= $z){
       echo $y;
   } else {
       echo $z;
   }
?>