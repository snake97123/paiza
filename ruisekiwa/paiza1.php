<?php
   fscanf(STDIN, "%d %d %d", $n, $a, $b);
   $str = trim(fgets(STDIN));
   $count = 0;
   
   for($i = $a - 1; $i < $b - 2; $i++) {
       if($str[$i] == "p" && $str[$i + 1] == "i" && $str[$i + 2] == "z") {
           $count++;
       }
   }
   
   echo $count;
?>

