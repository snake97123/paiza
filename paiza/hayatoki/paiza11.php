<?php
    $inputs = explode(" ", trim(fgets(STDIN)));
    
    $d = $inputs[0];
    $s = $inputs[1];
    
    $hosuu = ($d * 1000 * 100) / $s;
    
    if($hosuu >= 10000){
        echo "yes";
    } else {
        echo "no";
    }
    
?>