<?php
    $input = trim(fgets(STDIN));
    
    if($input < 30){
        echo "quiet";
    } elseif($input >= 30 && $input < 50){
        echo "normal";
    } elseif($input >= 50 && $input < 70){
        echo "noisy";
    } elseif($input >= 70) {
        echo "very noisy";
    }
?>
