<?php

list($n, $m) = array_map('intval', explode(' ', trim(fgets(STDIN))));
$A = array_map('intval', explode(' ', trim(fgets(STDIN))));

sort($A);

$maxPresents = 0;
$start = 0;

for($i = 0; $i < $n; $i++) {
  while($start < $n && $A[$start] < $A[$i] + $m) {
    $start++;
  }

  $maxPresents = max($maxPresents, $start - $i);
}

echo $maxPresents . PHP_EOL;

?>