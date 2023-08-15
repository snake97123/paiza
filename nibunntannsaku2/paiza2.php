<!-- 木の高さが全てK以上になる最小の時間を求める問題。時間ごとに高さを出していき、すべての木の高さがtrueになる最小の時間を2分探索で求める。 -->

<?php

list($N, $K) = array_map('intval', explode(" ", trim(fgets(STDIN))));
$trees = [];
for ($i = 0; $i < $N; $i++) {
  $trees[] = array_map('intval', explode(" ", trim(fgets(STDIN))));
}

function heightAtTime($A, $B, $C, $t) {
  return $A * $t * $t + $B * $t + $C;
}

function allTreesReachK($trees, $t, $K) {
  foreach ($trees as $tree) {
    list($A, $B, $C) = $tree;
    if (heightAtTime($A, $B, $C, $t) < $K) {
      return false;
    }
  }
  return true;
}

$low = 0;
$high = 1000000000;

while($low > $high) {
  $mid = ($low + $high) / 2;
  if (allTreesReachK($trees, $mid, $K)) {
    $high = $mid;
  } else {
    $low = $mid;
  }
}


echo intval(ceil($high)) . "\n";
?>