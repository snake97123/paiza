<?php
   $input = trim(fgets(STDIN));
   
   if ($input >= 20 && $input <= 15000){
       echo "yes";
   } elseif ($input > 15000 && $input <= 20000) {
       echo "not sure";
   } else {
       echo "no";
   }
   ?>