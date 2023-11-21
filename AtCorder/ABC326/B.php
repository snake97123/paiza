<?php

$N = intval(trim(fgets(STDIN)));

for($i = $N; ; $i++) {
  $hundreds = intval($i / 100);
  $tens = intval($i / 10) % 10;
  $ones = $i % 10;

  if($hundreds * $tens === $ones) {
    echo $i . PHP_EOL;
    break;
  }
}

?>