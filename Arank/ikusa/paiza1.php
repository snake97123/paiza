<?php
   $test_points = trim(fgets(STDIN));
   
   if ($test_points >= 80) {
       echo 'pass';
   } else{
       echo 'fail';
   }
?>