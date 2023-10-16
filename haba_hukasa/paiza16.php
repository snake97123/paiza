<?php 

list($N, $X) = explode(" ", trim(fgets(STDIN)));
$edges = [];
for($i = 0; $i < $N - 1; $i++){
    list($a, $b) = explode(" ", trim(fgets(STDIN)));
    $edges[$a][] = $b;
    $edges[$b][] = $a;
}

foreach($edges as $vertex => $neighbors) {
  sort($edges[$vertex]);
}

function dfs($vertex, $visited, $edges) {
  echo $vertex . "\n";
  $visited[$vertex] = true;
  foreach($edges[$vertex] as $neighbor) {
    if(!$visited[$neighbor]) {
      dfs($neighbor, $visited, $edges);
    }
  }
}

$visited = [];
dfs($X, $visited, $edges);

?>