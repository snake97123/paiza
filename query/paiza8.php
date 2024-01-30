<?php

list($H, $W, $N) = array_map('intval', explode(' ', trim(fgets(STDIN))));
$array_map = [];
$sums = array_fill(0, $H, array_fill(0, $W, 0));

// 配列の読み込み
for ($i = 0; $i < $H; $i++) {
    $array_map[$i] = array_map('intval', explode(' ', trim(fgets(STDIN))));
}

// 累積和の計算
for ($y = 0; $y < $H; $y++) {
    for ($x = 0; $x < $W; $x++) {
        $sums[$y][$x] = $array_map[$y][$x];
        if ($y > 0) $sums[$y][$x] += $sums[$y - 1][$x];
        if ($x > 0) $sums[$y][$x] += $sums[$y][$x - 1];
        if ($y > 0 && $x > 0) $sums[$y][$x] -= $sums[$y - 1][$x - 1];
    }
}

// 指定された座標の累積和を出力
for ($i = 0; $i < $N; $i++) {
    list($y, $x) = array_map('intval', explode(' ', trim(fgets(STDIN))));
    echo $sums[$y - 1][$x - 1] . PHP_EOL;
}

?>
