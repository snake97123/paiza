<?php
    // 自分の得意な言語で
    // Let's チャレンジ！！
   $n = trim(fgets(STDIN));
   
   $number_arrays = explode(" ", trim(fgets(STDIN)));
   $search_number = trim(fgets(STDIN));
//   print_r($number_arrays);
     $result = array_keys($number_arrays, $search_number);
     
    foreach ($result as $value) {
        echo $value + 1 . "\n";
    }
?>