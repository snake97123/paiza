<?php
    $N = intval(trim(fgets(STDIN)));
    
    $adjacencyMatrix = array_fill(0, $N, array_fill(0, $N, 0));
    
    for($i = 0; $i < $N - 1; $i++){
        list($a, $b) = array_map("intval", explode(" ", trim(fgets(STDIN))));
        $adjacencyMatrix[$a - 1][$b - 1] = 1;
        $adjacencyMatrix[$b - 1][$a - 1] = 1;
    }

    for($i = 0; $i < $N; $i++){
        echo implode(" ", $adjacencyMatrix[$i]) . "\n";
    }
?>