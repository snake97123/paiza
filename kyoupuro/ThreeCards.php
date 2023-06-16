<?php 

[$n, $k] = explode(" ", trim(fgets(STDIN)));
$ans = 0;
for($i = 1; $i <= $n; $i++){
  for($j = 1; $j <= $n; $j++){
    $l = $k - $i - $j;
    if($l >= 1 && $l <= $n){
      $ans++;
    }
  }
}

echo $ans;
?>