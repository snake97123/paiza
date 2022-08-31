<?php 

     [$n, $x] = explode(" ", trim(fgets(STDIN)));
     $x = intval($x);
     $weight_lists = array();
      for($i = 0; $i < $n; $i++){
        $weight_lists[$i] = intval(trim(fgets(STDIN)));
      }
      sort($weight_lists);
      $dp = [];
      for($i = 0; $i < $x + 1; $i++){
        $dp[$i] = $n + 1;
      }
      $dp[0] = 0;
      
      foreach($weight_lists as $val){
          for($j = $x; $j > $val - 1; $j--){
              if($dp[$j - $val] != $n + 1){
                  $dp[$j] = min($dp[$j], $dp[$j - $val] + 1);
              }
          }
      }
      
      if($dp[$x] == $n + 1){
          echo(-1);
      } else {
          echo($dp[$x]);
      }
?>