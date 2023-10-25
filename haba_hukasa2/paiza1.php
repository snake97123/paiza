<?php 

list($n, $x, $y) = explode(' ', trim(fgets(STDIN)));
$edges = [];
for($i = 0; $i < $n; $i++) {
  list($a, $b) = explode(' ', trim(fgets(STDIN)));
  $edges[$a][] = $b;
  $edges[$b][] = $a;
}

$queue = new SplQueue();
$queue->enqueue($x);
$visited = array_fill(1, $n, false);
$visited[$x] = true;
$dist = array_fill(1, $n, -1);
$dist[$x] = 0;

while(!$queue->isEmpty()) {
  $current = $queue->dequeue();
  if($current == $y) {
    break;
  }
  foreach($edges[$current] as $next) {
    if(!$visited[$next]) {
      $queue->enqueue($next);
      $visited[$next] = true;
      $dist[$next] = $dist[$current] + 1;
    }
  }
}

$time = $dist[$y] * 5;
if(count($edges[$x]) > 1) {
  $time += 10;
}

echo $time;

?>