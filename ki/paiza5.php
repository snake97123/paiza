<?php

$N = intval(trim(fgets(STDIN)));

$adjList = array_fill(1, $N, []);

for ($i = 0; $i < $N - 1; $i++) {
    list($a, $b) = array_map('intval', explode(' ', trim(fgets(STDIN))));
    $adjList[$a][] = $b;
    $adjList[$b][] = $a;
}

while (count($adjList) > 2) {
    $leaves = [];
    foreach ($adjList as $vertex => $neighbors) {
        if (count($neighbors) == 1) {
            $leaves[] = $vertex;
        }
    }

    foreach ($leaves as $leaf) {
        foreach ($adjList[$leaf] as $neighbor) {
            $key = array_search($leaf, $adjList[$neighbor]);
            unset($adjList[$neighbor][$key]);
        }
        unset($adjList[$leaf]);
    }
}
if(count($adjList) == 1){
    foreach ($adjList as $vertex => $neighbors) {
        echo $vertex;
    }
} else {
    foreach($adjList as $vertex => $neighbors) {
        echo $vertex . "\n";
    }
}

?>