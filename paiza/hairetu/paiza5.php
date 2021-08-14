<?php
   $n = trim(fgets(STDIN));
   $array = array();
  $difference = array();
   
  //身長の取得
   for ($i = 0; $i < $n; $i++) {
        $sintyou = trim(fgets(STDIN));
         array_push($array, $sintyou);
   }
   //小さい順に並び替える
   sort($array);
//   print_r($array);
   
// 身長差を計算する。
   for ($i = 0; $i < $n - 1; $i++) {
    $sintyou_difference = $array[$i+1] - $array[$i];
    array_push($difference, $sintyou_difference);
   }
   
//   print_r($difference);
// 一番小さい差を求める。
  $min_difference = min($difference);
  
//   $min = min($array);
// 差の小さいindexを取得
// indexとindex+1がもとめる二人組みになる。
   $serch = array_search($min_difference, $difference);
   
//   echo($serch);

echo $array[$serch] . "\n" . $array[$serch + 1]; 
?>