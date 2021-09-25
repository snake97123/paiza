<?php
    $input = str_split(trim(fgets(STDIN)));
    
    $new_array = array_unique($input);
    
    foreach ($new_array as $value) {
        echo $value;
    }
    
?>