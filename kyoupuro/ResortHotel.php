<?php 

$N = trim(fgets(STDIN));
$room_list = array_map('intval', explode(' ', trim(fgets(STDIN))));
$D = trim(fgets(STDIN));
$P = array_fill(0, $N + 1, 0);
$Q = array_fill(0, $N + 1, 0);

$P[1] = $room_list[0];
for($i = 2; $i <= $N; $i++) {
  $P[$i] = max($P[$i - 1], $room_list[$i - 1]);
}

$Q[$N] = $room_list[$N - 1];
for($i = $N - 1; $i >= 1; $i--) {
  $Q[$i] = max($Q[$i + 1], $room_list[$i - 1]);
}

for($i = 0; $i < $D; $i++) {
  list($A, $B) = array_map('intval', explode(' ', trim(fgets(STDIN))));
  echo max($P[$A - 1], $Q[$B + 1]);
}

?>