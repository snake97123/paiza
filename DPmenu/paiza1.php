<?php

[$x, $d, $k] = explode(" ", trim(fgets(STDIN)));
$a = [];
$a[0] = $x;
for($i = 1; $i < $k; $i++){
  $a[$i] = $a[$i - 1] + $d;   
}

echo($a[$k - 1]);
?>