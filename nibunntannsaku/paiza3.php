<!-- paizaの練習問題
URL:https://paiza.jp/works/mondai/binary_search/binary_search__application_step2/edit?language_uid=php&t=4d298d28d2137d96da6dd7bb57146634
<考え方>
二分探索を使用する。
まず入力値を取得する。
次に二分探索をする。その時に求める個数に分割できるかを計算する。
分割できるかの関数の作成。
関数は描く切れ目までの長さを取っていき、その長さが求める長さを超える場合にnを減らしていく。
nが0以下になったらtrueを返す。 -->

<?php

list($L, $n, $k) = array_map('intval', explode(' ', trim(fgets(STDIN))));
$A = array_map('intval', explode(' ', trim(fgets(STDIN))));

function canDivide($length, $n, $A, $L) {
    $prev = 0;
    foreach ($A as $a) {
        if ($a - $prev >= $length) {
            $n--;
            $prev = $a;
        }
    }
    
    if ($L - $prev >= $length) {
        $n--;
    }
    return $n <= 0;
}


$low = 1;
$high = $L;

while ($high - $low > 1) {
    $mid = intdiv($low + $high, 2);
    if (canDivide($mid, $n, $A, $L)) {
        $low = $mid;
    } else {
        $high = $mid;
    }
}

echo $low . "\n";

?>