<?php

//入力値の取得
list($N, $X) = array_map('intval', explode(' ', trim(fgets(STDIN))));
$problem_score = array_map('intval', explode(' ', trim(fgets(STDIN))));

//合計得点
$total_score = 0;

for($i = 0; $i < $N; $i++) {
  if($problem_score[$i] <= $X) {
    $total_score += $problem_score[$i];
  } 
}

echo $total_score;
?>