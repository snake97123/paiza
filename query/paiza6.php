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
// for ($i = 0; $i < $sequence_counts; $i++) {
//   $count = intval(trim(fgets(STDIN)));
//   $sum = 0;
//   for($j = 0; $j < $count; $j++) {
//     $sum += $number_sequence[$j];
//   }
//   echo $sum . "\n";
// $partial_number_sequence = array_slice($number_sequence, 0, $count);
// $sum = array_sum($partial_number_sequence);
// echo $sum . "\n"; 
?>