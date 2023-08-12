<?php

list($N, $Q) = array_map('intval', explode(" ", trim(fgets(STDIN))));
$number_array = [];
for ($i = 0; $i < $N; $i++) {
  $number = intval(trim(fgets(STDIN)));
  $number_array[] = $number;
}

for($i = 0; $i < $Q; $i++) {
  $query = array_map('intval', explode(" ", trim(fgets(STDIN))));
  if($query[0] === 1) {
    array_splice($number_array, $query[1] - 1, 0, $query[2]);
  }
  if($query[0] === 2) {
    array_splice($number_array, $query[1] - 1, 1);
  }
}

foreach($number_array as $number) {
  echo $number . "\n";
}
?>
