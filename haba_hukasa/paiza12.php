<?php
list($n, $m, $x) = explode(" ", trim(fgets(STDIN)));
$graph = [];
for ($i = 0; $i < $m; $i++) {
    list($a, $b) = explode(" ", trim(fgets(STDIN)));
    $graph[$a][] = $b;
    $graph[$b][] = $a;
}

$visited = [];
$queue = new SplQueue();
$queue->enqueue($x);
while (!$queue->isEmpty()) {
    $current = $queue->dequeue();
    if (isset($visited[$current])) continue;
    echo $current . "\n";
    $visited[$current] = true;
    if (isset($graph[$current])) {
        sort($graph[$current]);
        foreach ($graph[$current] as $neighbor) {
            if (!isset($visited[$neighbor])) {
                $queue->enqueue($neighbor);
            }
        }
    }
}
?>