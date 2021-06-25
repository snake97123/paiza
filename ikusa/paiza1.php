<?php
    // 自分の得意な言語で
    // Let's チャレンジ！！
    $input_write = trim(fgets(STDIN));
    $typing = trim(fgets(STDIN));
    
    if($input_write == $typing){
        echo 'YES';
    }else {
        echo 'NO';
    }
?>