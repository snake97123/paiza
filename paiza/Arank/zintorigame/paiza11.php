<?php
   //値の取得
   $input = explode(" ", trim(fgets(STDIN)));
   $row = $input[0];
   $col = $input[1];
   $x = 0;
   $y = 0;
   
   //マップの作成
   for ($i = 0; $i < $row; $i++) {
         $map_arrays[$i] = str_split(trim(fgets(STDIN)));
   }
   //*がある座標の取得
   for ($i = 0; $i < $row; $i++) {
        for ($j = 0; $j < $col; $j++) {
             if($map_arrays[$i][$j] == "*"){
             $y = $i;
             $x = $j;
           }
        }
   }
   //*の周りが＃でないことを確認して移動できるかの確認
   if ($map_arrays[$y - 1][$x] == ".") {
       $map_arrays[$y - 1][$x] = "*";
   }
   if ($map_arrays[$y + 1][$x] == ".") {
       $map_arrays[$y + 1][$x] = "*";
   }
   if ($map_arrays[$y][$x - 1] == ".") {
       $map_arrays[$y][$x - 1] = "*";
   }
   if ($map_arrays[$y][$x + 1] == ".") {
       $map_arrays[$y][$x + 1] = "*";
   }
   
   //マップの出力。
   foreach ($map_arrays as $map_array) {
       foreach ($map_array as $value) {
           echo $value;
       }
       echo "\n";
   }
  
   
  
?>