<?php
    $a = [];
    $a[0] = 1;
    $a[1] = 1;
    $k = trim(fgets(STDIN));
    for($i = 2; $i < $k; $i++){
        $a[$i] = $a[$i - 1] + $a[$i - 2];
    }
    echo($a[$k - 1]);
?>