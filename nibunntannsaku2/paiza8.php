<?php

function canWin($x, $card_a, $card_b, $card_c, $N) {
  $ab = [];
  for($i = 0; $i < $N; $i++) {
    $ab[] = $a[i] * $x + $b[i];
  }
  sort($ab);
  $score = 0;
  for($i = 0; $i < $N; $i++) {
    if($ab[i] > $c[$score]) {
      $score++;
    }
  }
  return $score > $N / 2 ? true : false; 
}

$N = intval(trim(fgets(STDIN)));
$card_a = [];
$card_b = [];
$card_c = [];
for($i = 0; $i < $N; $i++) {
  list($A, $B, $C) = array_map('intval', explode(' ', trim(fgets(STDIN))));
  $card_a[] = $A;
  $card_b[] = $B;
  $card_c[] = $C;
}

sort($card_c);

$low = 1;
$high = 1e9;

while($high - $low > 1) {
  $mid = intdiv($low + $high) / 2;
  if(canWin($mid, $card_a, $card_b, $card_c, $N)) {
    $high = $mid;
  } else {
    $low = $mid;
  }
}

echo $high . PHP_EOL;
?>