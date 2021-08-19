<?php
    $input = trim(fgets(STDIN));
    $arrays = explode(" ", trim(fgets(STDIN)));
    $search = trim(fgets(STDIN));
    
    $result = array_search($search, $arrays);
    echo $result + 1;
?>