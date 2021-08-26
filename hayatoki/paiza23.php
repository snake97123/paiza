<?php
    $input = trim(fgets(STDIN));
    
    $US = number_format($input - 18, 1);
    $UK = number_format($input - 18.5, 1);
    
    echo $US . " " . $UK;
?>