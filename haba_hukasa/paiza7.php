<?php

list($N, $X) = array_map('intval', explode(" ", trim(fgets(STDIN))));
$adjacent_list = [];
for($i = 0; $i < $N; $i++) {
  list($a, $b) = array_map('intval', explode(" ", trim(fgets(STDIN))));
  $adjacent_list[$a][] = $b;
  $adjacent_list[$b][] = $a;
}

foreach($adjacent_list as $key => $points) {
    if($key === $X) {
       sort($points);
       foreach($points as $point) {
           echo $point . "\n";
       }
    }
}
?>