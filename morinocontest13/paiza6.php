<?php

list($vertex_number, $side_number) = array_map('intval', explode(' ', trim(fgets(STDIN))));
for($i = 0; $i < $side_number; $i++) {
    list($side_start, $side_end) = array_map('intval', explode(' ', trim(fgets(STDIN))));
    $graph[$side_start][] = $side_end;
    $graph[$side_end][] = $side_start;
}

// Check if the $graph is connected
$visited = array_fill(1, $vertex_number, false);
$queue = new SplQueue();
$queue->enqueue(1);
$visited[1] = true;
while(!$queue->isEmpty()) {
    $current = $queue->dequeue();
    foreach($graph[$current] as $next) {
        if(!$visited[$next]) {
            $queue->enqueue($next);
            $visited[$next] = true;
        }
    }
}

if(array_search(false, $visited) === false) {
    echo "Yes";
} else {
    echo "No";
}

?>