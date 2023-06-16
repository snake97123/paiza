<?php

$Q = intval(fgets(STDIN));

$A = [];

for ($i = 0; $i < $Q; $i++) {

    $query = explode(" ", trim(fgets(STDIN)));

    if ($query[0] == "1") {
        array_push($A, $query[1]);
    } else {
        echo array_pop($A)."\n";
    }

    echo implode(" ", $A)."\n";
}

?>