<!-- ナップザック問題を解くプログラムです。 -->
<?php

list($N, $W) = array_map("intval", explode(" ", trim(fgets(STDIN))));
$items = [];
for($i = 0; $i < $N; $i++) {
    $items[] = array_map("intval", explode(" ", trim(fgets(STDIN))));
}

$dp = array_fill(0, $N + 1, array_fill(0, $W + 1, 0));
$dp[0][0] = 0;

for($i = 0; $i < $N; $i++) {
    for($j = 0; $j <= $W; $j++) {
        if($j >= $items[$i][0]) {
            $dp[$i + 1][$j] = max($dp[$i][$j], $dp[$i][$j - $items[$i][0]] + $items[$i][1]);
        } else {
            $dp[$i + 1][$j] = $dp[$i][$j];
        }
    }
}


$answer = 0;
for($i = 0; $i <= $W; $i++) {
    $answer = max($answer, $dp[$N][$i]);
}
echo $answer;