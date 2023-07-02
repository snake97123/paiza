<?php

list($N, $X, $Y) = array_map('intval', explode(' ', trim(fgets(STDIN))));
$str = trim(fgets(STDIN));

$sum_list = array_fill(0, $N + 1, 0);
for ($i = 0; $i < $N; $i++) {
  $sum_list[$i + 1] = $sum_list[$i] + ($str[$i] === 'b' ? 1 : 0);
}

echo $sum_list[$Y] - $sum_list[$X - 1];

?>