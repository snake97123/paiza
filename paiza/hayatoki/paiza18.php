<?php
   $input = trim(fgets(STDIN));
   
   $s = str_split($input);
   
//   print_r($s)
   foreach ($s as $value) {
       echo $value . "\n";
   }
?>