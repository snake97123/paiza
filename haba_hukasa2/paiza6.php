<?php

//入力値の取得
list($n, $m, $x, $y) = array_map('intval', explode(' ', trim(fgets(STDIN))));
$grid = [];
for($i = 0; $i < $n; $i++){
    $grid[] = str_split(trim(fgets(STDIN)));
}

//塗りつぶしの処理
function fill(&$grid, $x, $y, $n, $m) {
    $stack = [[$x, $y]];

    while (!empty($stack)) {
        [$cx, $cy] = array_pop($stack);

        if ($cx < 0 || $cx >= $n || $cy < 0 || $cy >= $m || $grid[$cx][$cy] !== '.') {
            continue;
        }

        $grid[$cx][$cy] = '+';

        $stack[] = [$cx + 1, $cy];
        $stack[] = [$cx - 1, $cy];
        $stack[] = [$cx, $cy + 1];
        $stack[] = [$cx, $cy - 1];
    }
}

// 塗りつぶしの処理を呼び出す
fill($grid, $x - 1, $y - 1, $n, $m);


//結果出力
foreach($grid as $row) {
  echo implode('', $row) .PHP_EOL;
}

?>