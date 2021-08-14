<?php
    // 自分の得意な言語で
    // Let's チャレンジ！！
    $inputs = explode(" ", trim(fgets(STDIN)));
    $f1 = $inputs[0];
    $f2 = $inputs[1];
    
    if($f1 > $f2){
        echo $f1 - $f2;
    }
     if($f2 > $f1){
        echo $f2 - $f1;
    }
?>