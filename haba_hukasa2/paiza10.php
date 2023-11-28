<?php
function findMinimumCost($n, $m, $r) {
    $queue = new SplQueue();
    $queue->enqueue([($n % $m), 9, 0]);


    $visited = [];
    $visited[($n % $m)][9] = 0;

    while (!$queue->isEmpty()) {
        list($currentRemainder, $lastDigit, $cost) = $queue->dequeue();

        if ($currentRemainder == $r) {
            return $cost;
        }

        if ($lastDigit < 9) {
            $newRemainder = ($currentRemainder + 1) % $m;
            if (!isset($visited[$newRemainder][$lastDigit + 1])) {
                $visited[$newRemainder][$lastDigit + 1] = $cost + 1;
                $queue->enqueue([$newRemainder, $lastDigit + 1, $cost + 1]);
            }
        }

        $newRemainder = ($currentRemainder * 10 + 1) % $m;
        if (!isset($visited[$newRemainder][1])) {
            $visited[$newRemainder][1] = $cost + 1;
            $queue->enqueue([$newRemainder, 1, $cost + 1]);
        }
    }

    return -1;
}
list($n, $m, $r) = array_map('intval', explode(' ', trim(fgets(STDIN))));
echo findMinimumCost($n, $m, $r);

?>