<?php
    [$n, $k] = explode(" ", trim(fgets(STDIN)));
    $W = explode(" ", trim(fgets(STDIN)));
    $V = explode(" ", trim(fgets(STDIN)));
    
    $left = 0;
    $right = 5001;
    for($i = 0; $i <= 100; $i++){
        $mid = ($left + $right) / 2;
        $tmp = array();
        for($j = 0; $j < $n; $j++){
            $tmp[$j] = $V[$j] - $W[$j] * $mid;
        }
        rsort($tmp);
        
        
        $array_sum = 0;
        for($l = 0; $l < $k; $l++){
            $array_sum += $tmp[$l];
        }
        
        if($array_sum >= 0){
            $left = $mid;
        } else {
            $right = $mid;
        }
    }
    
    echo($left);
?>