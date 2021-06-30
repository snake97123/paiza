<?php
    $min = trim(fgets(STDIN));
    
    if (0 <= $min && $min <= 5) {
        echo "raw";
    } elseif (6 <= $min && $min <= 7) {
        echo "soft boiled";
    } elseif (8 <= $min && $min <= 15) {
        echo "hard boiled";
    }
?>