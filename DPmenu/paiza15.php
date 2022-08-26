<?php
  $n = trim(fgets(STDIN));
  $heights = [];
  for($i = 0; $i <= $n; $i++){
    $heights[$i] = trim(fgets(STDIN));
  }
  $dp = [];
  $count = 0;
  for($i = 0; $i < $n; $i++){
     if($heights[$i] >= $heights[$i + 1]){
      $count += 1;
     } else {
      $count = 1;
     }
     $dp[$i] = $count;
  }
  echo max($dp);
?>