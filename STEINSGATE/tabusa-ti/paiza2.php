<?php
   $input = trim(fgets(STDIN));
   $arrays1 = explode(" ", trim(fgets(STDIN)));
   $arrays2 = explode(" ", trim(fgets(STDIN)));
   
   $new_array = array();
   
   for ($i = 0; $i < $input; $i++) {
        $new_array[$i] = $arrays2[$i] - $arrays1[$i];
   }
   
//   print_r($new_array);
   foreach ($new_array as $value) {
       echo $value . " "; 
   }

?>