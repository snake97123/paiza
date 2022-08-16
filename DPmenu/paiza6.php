<?php
    $a = [];
    $a[0] = 1;
    $a[1] = 1;
    $n = trim(fgets(STDIN));
    for($i = 2; $i <= 40; $i++){
        $a[$i] = $a[$i - 1] + $a[$i - 2];
    }
    
    for($i = 0; $i < $n; $i++){
        $index = trim(fgets(STDIN));
        echo($a[$index - 1] . PHP_EOL);
    }
?>