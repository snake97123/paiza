<?php
    $n = trim(fgets(STDIN));
    $steps = [];
    $steps[0] = 1;
    $steps[1] = 1;
    for($i = 2; $i <= $n; $i++){
        $steps[$i] = $steps[$i - 1] + $steps[$i - 2];
    }
    echo($steps[$n]);
?>