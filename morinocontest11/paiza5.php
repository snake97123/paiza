<?php
//座標の取得
$input_information = array_map('intval', explode(' ', trim(fgets(STDIN))));
$x = abs($input_information[0]);
$y = abs($input_information[1]);

//最低ステップ数の計算
$step = calculateMinimumStep($x, $y);

echo $step;

//最低ステップ数を計算する関数
function calculateMinimumStep($x, $y) {
  if(abs($x - $y) <= 1) {
     return $x + $y;
  } else {
    return  $x + $y + (abs($x - $y) - 1);
  }
}
?>