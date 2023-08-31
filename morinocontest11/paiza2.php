<?php 
function fibonacci($n) {
  if ($n == 1 || $n == 2) {
    return 1;
  } else {
    return fibonacci($n - 1) + fibonacci($n - 2);
  }
}

for($i = 1; $i <= 10; $i++){
  $f_n = fibonacci($i);
  $sum += $f_n;
  echo $f_n . PHP_EOL;
}