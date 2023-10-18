<?php

list($N, $X, $Y) = explode(" ", trim(fgets(STDIN)));
$edges = [];
for ($i = 0; $i < $N - 1; $i++) {
    list($a, $b) = explode(" ", trim(fgets(STDIN)));
    $edges[$a - 1][] = $b - 1;
    $edges[$b - 1][] = $a - 1;
}

foreach ($edges as $vertex => $neighbors) {
    sort($edges[$vertex]);
}

$dfs_count = 0;
$dfs_unvisited = array_fill(0, $N, true);

function dfs($now, $target, $edges)
{
    global $dfs_count, $dfs_unvisited;
    $dfs_unvisited[$now] = false;
    if ($dfs_unvisited[$target]) {
        $dfs_count += 1;
    }
    foreach ($edges[$now] as $neighbor) {
        if ($dfs_unvisited[$neighbor]) {
            dfs($neighbor, $target, $edges);
        }
    }
}

dfs($X - 1, $Y - 1, $edges);

$bfs_count = 0;
$bfs_unvisited = array_fill(0, $N, true);
$queue = new SplQueue();
$queue->enqueue($X - 1);
$bfs_unvisited[$X - 1] = false;

while (!$queue->isEmpty()) {
    $now = $queue->dequeue();
    if ($now == $Y - 1) {
        break;
    } else {
        $bfs_count += 1;
    }
    foreach ($edges[$now] as $nxt) {
        if ($bfs_unvisited[$nxt]) {
            $bfs_unvisited[$nxt] = false;
            $queue->enqueue($nxt);
        }
    }
}

if ($bfs_count < $dfs_count) {
    echo "bfs";
} elseif ($bfs_count == $dfs_count) {
    echo "same";
} else {
    echo "dfs";
}
?>
