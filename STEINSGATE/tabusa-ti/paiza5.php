<?php
    $new_arrays = array();
    [$n, $m, $l] = explode(" ", trim(fgets(STDIN)));
    for ($i = 1; $i <= $n ; $i++) {
         $comands[$i] = explode(" ", trim(fgets(STDIN)));
    }
    
    for ($i = 0; $i < $l; $i++) {
         $arrays[$i] = explode(" ", trim(fgets(STDIN)));
    }
    
    // print_r($arrays);
    
    for ($i = 0; $i < $l - 1; $i++) {
         for ($j = 0; $j < $m; $j++) {
              $array_difference[$i] = $arrays[$i+1][$j] - $arrays[$i][$j];
              array_push($new_arrays, $array_difference[$i]);
         }
    }
    
    print_r($new_arrays);
?>