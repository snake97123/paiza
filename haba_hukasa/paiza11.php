<?php 

list($N, $X, $Y) = array_map('intval', explode(' ', trim(fgets(STDIN))));
$ki = array_fill(1, $N, []);
for($i = 1; $i < $N; $i++) {
  list($A, $B) = array_map('intval', explode(' ', trim(fgets(STDIN))));
  $ki[$A][] = $B;
  $ki[$B][] = $A;
}

$visited = array_fill(1, $N, false);
$queue = new SplQueue();
$visited[$X] = true;
$queue->enqueue($X);

$prev = array_fill(1, $N, null);

while(!$queue->isEmpty()) {
  $current = $queue->dequeue();

  foreach($ki[$current] as $next) {
    if(!$visited[$next]) {
      $visited[$next] = true;
      $queue->enqueue($next);
      $prev[$next] = $current;

      if($next == $Y) {
        break 2;
      }
    }
  }
}

$path = [];
for($v = $Y; $v !== null; $v = $prev[$v]) {
  $path[] = $v;
}
$path = array_reverse($path);

foreach($path as $v) {
  echo $v . "\n";
}
?>