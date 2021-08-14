<?php
    $n = trim(fgets(STDIN));
    $strike_count = 0;
    $ball_count = 0;
    
    for ($i = 0; $i < $n; $i++) {
         $string = trim(fgets(STDIN));
         if($string == "strike" && $strike_count != 2){
             echo "strike!" . "\n";
             $strike_count++;
         } elseif ($string == "strike" && $strike_count == 2) {
             echo "out!" . "\n";
             break;
         }
         if($string == "ball" && $ball_count != 3){
             echo "ball!" . "\n";
             $ball_count++;
         } elseif ($string == "ball" && $ball_count == 3) {
             echo "fourball!" . "\n";
             break;
         }
    }
    
?>