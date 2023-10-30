<?php

list($n, $m, $x, $y, $k) = array_map('intval', explode(' ', trim(fgets(STDIN))));
$x--; $y--;

$s = array();
for ($i = 0; $i < $n; $i++) {
    $s[] = str_split(trim(fgets(STDIN)));
}

$dist = array_fill(0, $n, array_fill(0, $m, -1));
$dist[$x][$y] = 0;

$q = new SplQueue();
$q->enqueue([$x, $y]);

$dx = [1, 0, -1, 0];
$dy = [0, 1, 0, -1];

while (!$q->isEmpty()) {
    list($now_x, $now_y) = $q->dequeue();

    for ($i = 0; $i < 4; $i++) {
        $next_x = $now_x + $dx[$i];
        $next_y = $now_y + $dy[$i];

        if ($next_x < 0 || $next_x >= $n || $next_y < 0 || $next_y >= $m) {
            continue;
        }

        if ($s[$next_x][$next_y] == '#' || $dist[$next_x][$next_y] != -1) {
            continue;
        }

        $dist[$next_x][$next_y] = $dist[$now_x][$now_y] + 1;
        $q->enqueue([$next_x, $next_y]);
    }
}

for ($t = 0; $t < $k; $t++) {
    for ($i = 0; $i < $n; $i++) {
        for ($j = 0; $j < $m; $j++) {
            if ($dist[$i][$j] == $t) {
                $s[$i][$j] = '+';
            }
        }
        echo implode('', $s[$i]) . PHP_EOL;
    }
}

?>
