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
        $dp[$i] = 0;
      }
      $dp[0] = 1;
    
      foreach($weight_lists as $val){
        for($j = $x; $j > $val - 1; $j--){
         $dp[$j] = ($dp[$j] + $dp[$j - $val]) % 1000000007;
        }
      }
      echo($dp[$x]);
?>