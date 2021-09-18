<?php
   $n = trim(fgets(STDIN));
   $arrays = explode(" ", trim(fgets(STDIN)));
   
   for ($i = 2; $i < $n + 1; $i++) {
        $test = array_splice($arrays, 0, $i);
        sort($test);
        // print_r($test);
        $arrays = array_merge($test, $arrays);
        // print_r($arrays);
        for ($j = 0; $j < 1; $j++) {
        foreach ($arrays as $value) {
            echo $value . " ";
        }
        echo "\n";
     }
    
        
   }
?>