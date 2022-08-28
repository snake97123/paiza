<?php
     [$n, $x] = explode(" ", trim(fgets(STDIN)));
     $x = intval($x);
      $weight_lists = array();
      for($i = 0; $i < $n; $i++){
        $weight_lists[$i] = intval(trim(fgets(STDIN)));
      }
      $dp = [];
      for($i = 0; $i < $x; $i++){
        $dp[$i] = 0;
      }
      $dp[0] = 1;
    
      foreach($weight_lists as $val){
        for($j = $x; $j > $val - 1; $j--){
          if($dp[$j - $val] == 1){
            $dp[$j] = 1;
          }
        }
      }
      
      if($dp[$x]){
          echo('yes');
      } else {
          echo('no');
      }  
?>