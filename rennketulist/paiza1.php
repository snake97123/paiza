<?php

list($N, $Q) = array_map('intval', explode(" ", trim(fgets(STDIN))));
$number_array = [];
for ($i = 0; $i < $N; $i++) {
  $number = intval(trim(fgets(STDIN)));
  $number_array[] = $number;
}

for ($i = 0; $i < $Q; $i++) {
  $query = array_map('intval', explode(" ", trim(fgets(STDIN))));
  if ($query[0] === 1) {
     if($query[1] <= count($number_array)) {
      //配列の途中に要素を挿入
      array_splice($number_array, $query[1] - 1, 0, $query[2]);
     } else {
      $number_array[] = $query[2];
     }
  }
  if ($query[0] === 2) {
   //配列の要素を削除する。
    array_splice($number_array, $query[1] - 1, 1);
  }
}

foreach($number_array as $number) {
  echo $number . "\n";
}
?>