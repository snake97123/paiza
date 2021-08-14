<?php
   $n = trim(fgets(STDIN));
   $arrays = array();
   
   for ($i = 0; $i < $n; $i++) {
        $number = trim(fgets(STDIN));
        
        
        if($number % 2 == 1){
           array_push($arrays, $number);
        }
   }
//   print_r($arrays);
    sort($arrays);
    foreach ($arrays as $value) {
        echo $value . "\n";
    }
?>