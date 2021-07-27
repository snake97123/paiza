<?php
    $inputs = explode(" ", trim(fgets(STDIN)));
    $row = $inputs[0];
    $line = $inputs[1];
    $x = $inputs[2];
    $y = $inputs[3];
    
    for ($i = 0; $i < $row; $i++) {
         for ($j = 0; $j < $line; $j++) {
              if($i == $x && $j == $y){
                 echo "!";
              } elseif($i == $x || $j == $y){
                 echo "*";
              } else {
                 echo ".";
              }
              
         }
         echo "\n";
    }
    
?>