<?php

list($array_length, $interval_counts) = array_map('intval', explode(' ', trim(fgets(STDIN))));
$number_sequence = [];
for($i = 0; $i < $array_length; $i++) {
    $number_sequence[] = intval(trim(fgets(STDIN)));
}

$sum_sequence = [];
$sum = 0;
foreach($number_sequence as $number) {
    $sum += $number;
    $sum_sequence[] = $sum;
}
// print_r($sum_sequence);

for ($i = 0; $i < $interval_counts; $i++) {
  list($start, $end) = array_map('intval', explode(' ', trim(fgets(STDIN))));
  $answer = $sum_sequence[$end - 1] - $sum_sequence[$start - 2];
  echo $answer . "\n";
}

?>