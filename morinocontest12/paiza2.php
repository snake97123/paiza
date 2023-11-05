<?php
    $str1 = trim(fgets(STDIN));
    $str2 = trim(fgets(STDIN));
    if(false !== strpos($str1, $str2)) {
        echo "Yes";
    } else {
        echo "No";
    }
?>