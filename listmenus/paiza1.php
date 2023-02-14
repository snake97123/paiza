<?php
    $input_information = explode(" ", trim(fgets(STDIN)));
    $N = $input_information[0];
    $M = $input_information[1];
    $name_list = explode(" ", trim(fgets(STDIN)));
    $interrupt_name_list = explode(" ", trim(fgets(STDIN)));
    $index_list = explode(" ", trim(fgets(STDIN)));
    for ($i = 0; $i < $M; $i++) {
        array_splice( $name_list, $index_list[$i] - 1, 0, $interrupt_name_list[$i]);
    }
    
    foreach ($name_list as $name) {
        echo $name . "\n";
    }
?>