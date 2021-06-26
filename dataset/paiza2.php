<?php
    $inputs = explode(" ", trim(fgets(STDIN)));
    $elements = $inputs[0];
    $operation_times = $inputs[1];
    
    $arrays = explode(" ", trim(fgets(STDIN)));
    for ($i = 0; $i < $operation_times; $i++) {
         $operation = explode(" ", trim(fgets(STDIN)));
        if ($operation[0] == 0) {
            array_push($arrays, $operation[1]);
        }elseif ($operation[0] == 1) {
            array_pop($arrays);
        } else {
            foreach ($arrays as $value) {
                echo $value . " ";
            }
        echo "\n";
        }
    }
?>