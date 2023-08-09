<?php
//paiza練習問題 https://paiza.jp/works/mondai/stack_queue/stack_queue__practice_step6
//考え方：スタックとキューを利用する。
//ボールを一つずつ取り出してスタックに入れて行く。その時にスタックが空でなく、一つ前の要素と比べた時に値が同じならボールを2倍にする。そしてスタックの末尾の要素を除外する。
//その条件を満たす限りスタックの前の要素と見比べていき、条件を満たさなくなったらスタックにボールを入れる。
//最後にスタックの中身を逆順にして出力する。

$N = intval(fgets(STDIN));
$balls = array_map('intval', explode(' ', trim(fgets(STDIN))));

$stack = [];

foreach ($balls as $ball) {
    while (!empty($stack) && $stack[count($stack) - 1] == $ball) {
        $ball *= 2;
        array_pop($stack);
    }
    $stack[] = $ball;
}

$reversedStack = array_reverse($stack);
foreach ($reversedStack as $value) {
    echo $value . "\n";
}

?>