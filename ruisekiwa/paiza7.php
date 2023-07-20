<?php

list($N, $Q) = array_map('intval', explode(' ', trim(fgets(STDIN))));
$number_array = array_fill(0, $N + 1, 0);

//与えられた２つの数値の範囲の値を+1する
for($i = 0; $i < $Q; $i++) {
    list($start, $end) = array_map('intval', explode(' ', trim(fgets(STDIN))));
    $number_array[$start - 1] += 1;
    $number_array[$end] -= 1;
}

for ($i = 0; $i < $N; $i++) {
    $number_array[$i + 1] += $number_array[$i];
}


echo max($number_array);