<?php
    $inputs = explode(" ", trim(fgets(STDIN)));
    
    $n = $inputs[0];
    $k = $inputs[1];
    $f = $inputs[2];
    
    $arrays = array();
    
    for ($i = 0; $i < $k; $i++) {
         $sheet = trim(fgets(STDIN));
         array_push($arrays, $sheet);
    }
    // print_r($arrays);
    
?>