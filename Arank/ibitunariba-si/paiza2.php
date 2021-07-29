<?php
    $inputs = explode(" ", trim(fgets(STDIN)));
    $col = $inputs[0];
    $line = $inputs[1];
    $y = $inputs[2];
    $x = $inputs[3];
    
    for ($i = 0; $i < $col; $i++){
        $map_arrays[$i] = str_split(trim(fgets(STDIN)));
    }
    
    // print_r($map_arrays);
    
    for ($i = 0; $i < $col; $i++) {
         for ($j = 0; $j < $line; $j++) {
              if ($i == $x || $j == $y) {
                  $map_arrays[$j][$i] = "*";
              }
         }
    }
    
    // print_r($map_arrays);
    
    for ($i = 0; $i < $col; $i++) {
         for ( $j = 0; $j < $line; $j++){
             echo $map_arrays[$i][$j];
         }
         echo "\n";
     }
?>

<!-- 途中段階 -->