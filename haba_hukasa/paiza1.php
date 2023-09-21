<?php 

list($H, $W) = array_map('intval', explode(" ", trim(fgets(STDIN))));
$graph = [];
for($i = 0; $i < $H; $i++) {
  for($j = 0; $j < $W; $j++) {
    $graph[$i][$j] = ".";
  }
}

list($x, $y) = array_map('intval', explode(" ", trim(fgets(STDIN))));
$graph[$x][$y] = "*";
if($x - 1 > 0){
  $graph[$x - 1][$y] = "*";
}
if($x + 1 < $H){
  $graph[$x + 1][$y] = "*";
}
if($y - 1 > 0){
  $graph[$x][$y - 1] = "*";
}
if($y + 1 < $W){
  $graph[$x][$y + 1] = "*";
}

for($i = 0; $i < $H; $i++) {
  echo implode("", $graph[$i]) . "\n";
}

?>