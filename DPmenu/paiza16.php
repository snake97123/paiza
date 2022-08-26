<?php 
  
  $n = trim(fgets(STDIN));
  $trees = [];
  for($i = 0; $i <= $n; $i++){
    $trees[$i] = trim(fgets(STDIN));
  }
  $dp =[];
  for($i = 0; $i < $n; $i++){
    $dp[$i] = 1;
  }
  for($i = 1; $i < $n; $i++){
    for($j = 0; $j < $i; $j++){
      if ($trees[$j] < $trees[$i]){
        $dp[$i] = max($dp[$i], $dp[$j] + 1);
      }
    }
  }
  echo max($dp);



?>
