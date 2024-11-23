<?php
// 入力データを受け取る: 単位重量（unitWeight）とデータの個数（count）
list($unitWeight, $count) = explode(" ", trim(fgets(STDIN)));

for ($i = 0; $i < $count; $i++) {
    // 入力された重さを取得
    $weight = intval(trim(fgets(STDIN)));

    // 商（quotient）と余り（remainder）を計算
    $quotient = intval(floor($weight / $unitWeight));
    $remainder = $weight % $unitWeight;

    // 区切りを調整（余りが半分以上または少なくとも1回に分割する必要がある場合）
    if ($quotient === 0 || $remainder >= $unitWeight / 2) {
        $quotient += 1;
    }

    // 必要な重量（requiredWeight）を計算
    $requiredWeight = $unitWeight * $quotient;
    echo $requiredWeight . PHP_EOL;
}
?>
