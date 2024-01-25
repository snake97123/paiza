<?php

list($number_counts, $sequence_counts) = explode(' ', trim(fgets(STDIN)));
$number_sequence = [];
for ($i = 0; $i < $number_counts; $i++) {
    $number_sequence[] = intval(trim(fgets(STDIN)));
}
// 累積和の作成
$sum_sequence = [];
$sum = 0;
foreach ($number_sequence as $number) {
    $sum += $number;
    $sum_sequence[] = $sum;
}

for($i = 0; $i < $sequence_counts; $i++) {
    $count = intval(trim(fgets(STDIN)));
    $sum = $sum_sequence[$count - 1];
    echo $sum . "\n";
}
?>