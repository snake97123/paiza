<?php

function dfs($node, $parent, $graph, &$colors) {
  foreach($graph[$node] as $child) {
    if($child != $parent) {
      $colors[$child] = 3 - $colors[$node];
      dfs($child, $node, $graph, $colors);
    }
  }
}

$n = intval(trim(fgets(STDIN)));
$graph = array_fill(1, $n, []);
$colors = array_fill(1, $n, 0);

for($i = 0; $i < $n; $i++) {
  list($a, $b) = array_map('intval', explode(" ", trim(fgets(STDIN))));
  $graph[$a][] = $b;
  $graph[$b][] = $a;
}

$colors[1] = 1;
dfs(1, 0, $graph, $colors);

echo "2\n";
for($i = 1; $i <= $n; $i++) {
  echo $colors[$i] . "\n";
}