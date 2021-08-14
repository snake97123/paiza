<?php
    // 自分の得意な言語で
   $numbers = explode(" ", trim(fgets(STDIN)));
   
   $a = $numbers[0];
   $b = $numbers[1];
   $c = $numbers[2];
   $d = $numbers[3];
   
   $result = (($a + $b) * $c) * (($a + $b) * $c)  % $d;
   echo $result;
   
?>
