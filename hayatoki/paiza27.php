<?php
    $inputs = explode(" ", trim(fgets(STDIN)));
    $t1 = $inputs[0];
    $t2 = $inputs[1];
    $t = $t2 - $t1;
    
    if($t2 > $t1){
        echo "+" . $t;
    }elseif ($t2 === $t1) {
        echo "0";
    }else{
        echo $t;
    }
?>