<?php
   $inputs = explode(" ", trim(fgets(STDIN)));
   
   $h = $inputs[0];
   $w = $inputs[1];
   $player = $inputs[2];
   
   for ($i = 1; $i <= $h; $i++) {
        $toranp_array[$i] = explode(" ", trim(fgets(STDIN)));
   }
   for ($i = 1; $i <= $h; $i++) {
        array_unshift($toranp_array[$i], " ");
   }
//   print_r($toranp_array);
  $n = trim(fgets(STDIN));
  
  for ($i = 0; $i < $n; $i++) {
       $inputs = explode(" ", trim(fgets(STDIN)));
       $a = $inputs[0];
       $b = $inputs[1];
       $c = $inputs[2];
       $d = $inputs[3];
       if ($toranp_array[$a][$b] == $toranp_array[$c][$d]) {
          //二次元配列の削除方法の検索
       }    
  }
  
  
   
?>
