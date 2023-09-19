<?php 

function calc_length($now) {
  global $graph, $len_from_T, $parent;
  foreach($graph[$now] as $nxt) {
    if($len_from_T[$nxt] == -1) {
      $len_from_T[$nxt] = $len_from_T[$now] + 1;
      $parent[$nxt] = $now;
      calc_length($nxt);
    }
  }
}
list($N, $T, $S, $C, $D) = array_map('intval', explode(" ", trim(fgets(STDIN))));
$graph = array_fill(0, $N, []);
for($i = 0; $i < $N - 1; $i++) {
  list($a, $b) = array_map('intval', explode(" ", trim(fgets(STDIN))));
  $a--;
  $b--;
  $graph[$a][] = $b;
  $graph[$b][] = $a;
}

$parent = array_fill(0, $N, 0);
$parent[$T - 1] = -1;
$len_from_T = array_fill(0, $N, -1);
$len_from_T[$T - 1] = 0;

calc_length($T - 1);

// print_r($parent);
// print_r($len_from_T);

if($len_from_T[$S - 1] <= $C) {
  for($i = 0; $i < $N; $i++) {
    if($len_from_T[$i] == $len_from_T[$S - 1] - $C + $D) {
      echo ($i + 1) . "\n";
    }
  }
} else {
  $highest = $S - 1;
  for($i = 0; $i < $C; $i++) {
    $highest = $parent[$highest]; 
  }

  for($i = 0; $i < $N; $i++) {
    if($len_from_T[$i] == $len_from_T[$S - 1] - $C + $D) {
      $anscestor = $i;
      for($j = 0; $j < $D; $j++) {
        $anscestor = $parent[$anscestor];
      }

      if($anscestor == $highest) {
        echo ($i + 1) . "\n";
      }
    }
  }
}
?>