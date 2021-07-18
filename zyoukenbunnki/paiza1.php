<?php
    $inputs = explode(" ", trim(fgets(STDIN)));
    $x = $inputs[0];
    $y = $inputs[1];
    $z = $inputs[2];
    
    if(($x >= 10 && $y >= 10) || $z >= 10){
        echo 'YES';
    } else {
        echo 'NO';
    }
?>