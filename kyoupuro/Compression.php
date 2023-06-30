<?php

$N = trim(fgets(STDIN));
$numbers_list = array_map('intval', explode(' ', trim(fgets(STDIN))));

$number_list_without_duplicate = array_unique($numbers_list);
sort($number_list_without_duplicate);

$compressed_numbers = array_fill(0, $N, 0);
for($i = 0; $i < $N; $i++) {
  $compressed_numbers[$i] = array_search($numbers_list[$i], $number_list_without_duplicate) + 1;
}

echo implode(' ', $compressed_numbers);

?>