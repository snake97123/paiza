<?php

list($n, $m) = array_map('intval', explode(' ', trim(fgets(STDIN))));
$general_road_duration_times = array_map('intval', explode(' ', trim(fgets(STDIN))));
$edges = [];
for ($i = 0; $i < $m; $i++) {
    list($a, $b) = array_map('intval', explode(' ', trim(fgets(STDIN))));
    $edges[$a][] = $b;
    $edges[$b][] = $a;
}

$expressway_duration_times = array_fill(1, $n, PHP_INT_MAX);
$expressway_duration_times[1] = 0;

$queue = new SplQueue();
$queue->enqueue(1);

while (!$queue->isEmpty()) {
    $current = $queue->dequeue();
     foreach ($edges[$current] as $neighbour) {
       if ($expressway_duration_times[$current] + 5 < $expressway_duration_times[$neighbour]) {
       $expressway_duration_times[$neighbour] = $expressway_duration_times[$current] + 5;
       $queue->enqueue($neighbour);
    }
  }
}

$counter = 0;
for ($i = 2; $i <= $n; $i++) {
    if ($expressway_duration_times[$i] < $general_road_duration_times[$i - 1]) {
        $counter++;
    }
}

echo $counter;

?>