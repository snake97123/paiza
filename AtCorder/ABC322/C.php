<?php 

list($n, $m) = array_map('intval', explode(' ', trim(fgets(STDIN))));
$lunch_days = array_map('intval', explode(' ', trim(fgets(STDIN))));
$lunch_days = array_reverse($lunch_days); 

$next_firework_day = array_pop($lunch_days); 
for($i = 1; $i <= $n; $i++) {
  if ($i == $next_firework_day) {
    echo "0\n";
    $next_firework_day = array_pop($lunch_days); 
  } else {
    echo ($next_firework_day - $i) . "\n";
  }
}
?>
