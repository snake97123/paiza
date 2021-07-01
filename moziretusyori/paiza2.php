<?php
   $check_input = trim(fgets(STDIN));
   
   if (is_numeric($check_input)) {
       echo "YES";
   } else {
       echo "NO";
   }
?>