<?php
// a以上b以下の整数値が与えられる。
// この範囲内で2, 3のいずれかで割り切れる整数の個数を求める。

[$a, $b] = array_map('intval', explode(' ', trim(fgets(STDIN))));
$count = 0;
for ($i = $a; $i <= $b; $i++) {
    if ($i % 2 == 0 || $i % 3 == 0) {
        $count++;
    }
}

echo $count;
?>