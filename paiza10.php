<?php
    $input = explode(" ", trim(fgets(STDIN)));
    $n = $input[0];
    $k = $input[1];
    
    $result = 0;
    
    if ($n % 3 == 0) {
        if($k % 3 == 0)
        $result = -1;
    } elseif($n % 3 == 1){
        if($k % 3 != 0){
            $result = 1;
        }
    } else {
        if($k % 3 == 0){
            $result = -1;
        }
    }
    echo $result;
?>