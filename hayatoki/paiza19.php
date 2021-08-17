<?php
   $input = trim(fgets(STDIN));
   
   if($input === "B"){
       echo 2;
   } elseif ($input === "A" || $input === "D" || $input == "O" || $input === "P" || $input === "Q" || $input === "R") {
       echo 1;
   } else {
       echo 0;
   }
?>