<?php

function isMaxHeap($N) {
    for($i = 0; $i < $N - 1; $i++) {
        list($a, $b) = array_map('intval', explode(' ', trim(fgets(STDIN))));
        if ($a < $b) {
            return false;
        } 
    }
    return true;
}

list($N, $R) = array_map('intval', explode(' ', trim(fgets(STDIN))));

if(isMaxHeap($N)) {
    echo "YES";
} else {
    echo "NO";
}
?>