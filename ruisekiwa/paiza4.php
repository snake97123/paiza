<?php

list($N, $X, $Y) = array_map('intval', explode(' ', trim(fgets(STDIN))));
$number_list = array_map('intval', explode(' ', trim(fgets(STDIN))));
$even_number_count = 0;
$even_number_count_list = [];


for ($i = 1; $i <= $N; $i++) {
  if ($number_list[$i - 1] % 2 == 0) {
    $even_number_count++;
  }
  $even_number_count_list[$i] = $even_number_count;
}

$answer = $even_number_count_list[$Y + 1] - $even_number_count_list[$X];
echo $answer;

?>