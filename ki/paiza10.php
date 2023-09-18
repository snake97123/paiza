<?php

list($N, $R) = array_map('intval', explode(' ', trim(fgets(STDIN))));
$adjacent_list = array_fill(1, $N + 1, []);
$check_list = [];
$visited = array_fill(1, $N + 1, false);
$parent = array_fill(1, $N + 1, null);

for($i = 0; $i < $N - 1; $i++) {
    list($a, $b) = array_map('intval', explode(' ', trim(fgets(STDIN))));
    $check_list[] = [$a, $b];
    $adjacent_list[$b][] = $a;
    $adjacent_list[$a][] = $b;
}

function dfs($current) {
    global $adjacent_list, $visited, $parent;
    $visited[$current] = true;
    foreach($adjacent_list[$current] as $next) {
        if(!$visited[$next]) {
            $parent[$next] = $current;
            dfs($next);
        }
    }
}

dfs($R);

foreach($check_list as $key => $values) {
  foreach($values as $value){
      if($parent[$value] === $key) {
          echo "A" . "\n";  
      } else {
          echo "B" . "\n";  
      }
  }
}



?>