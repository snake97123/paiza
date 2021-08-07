<?php
    $inputs = explode(" ", trim(fgets(STDIN)));
    
    $characters = $inputs[0];
    $keikenti = $inputs[1];
    $need_keikenti = 0;
    $need_keikentis = 0;
    
    for ($i = 0; $i < $characters; $i++) {
        $need_keikenti =  trim(fgets(STDIN));
        $need_keikentis += $need_keikenti;
    }
    
    // echo $need_keikenti;
    $times = ceil($need_keikentis / $keikenti);
    echo $times;
?>
