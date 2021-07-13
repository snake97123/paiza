<?php
    $inputs = explode(" ", trim(fgets(STDIN)));
    
    $n = $inputs[0];
    $k = $inputs[1];
    $f = $inputs[2];
    
    $arrays = array();
    
    for ($i = 0; $i < $k; $i++) {
         $sheet = trim(fgets(STDIN));
         array_push($arrays, $sheet);
    }
    // print_r($arrays);

    //値を取り除く
    array_splice($arrays, 0, $f);
    
    // print_r($arrays);
    //重複を取り除く
   $new_arrays = array_unique($arrays);
    
    // print_r($new_arrays);
    //値の出力
    foreach ($new_arrays as $value) {
        echo $value . "\n";
    }
?>