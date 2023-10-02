<?php 

list($n, $m) = array_map('intval', explode(' ', trim(fgets(STDIN))));
$adjacent_vertices = array_fill(1, $n, array());

for($i = 0; $i < $m; $i++) {
    list($a, $b) = array_map('intval', explode(' ', trim(fgets(STDIN))));
    $adjacent_vertices[$a][] = $b;
    $adjacent_vertices[$b][] = $a;
}

for($i = 1; $i < $n; $i++) {
  echo "$i: {" . implode(', ', $adjacent_vertices[$i]) . "}" . PHP_EOL;
}

?>