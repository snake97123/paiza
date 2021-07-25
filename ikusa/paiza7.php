<?php
    $n = trim(fgets(STDIN));
    $array = array();
    for ($i = 0; $i < $n; $i++) {
        $search = trim(fgets(STDIN));
         if(!in_array($search, $array)){
             echo "YES" . "\n";
             array_push($array, $search);
         } else {
             echo "NO" . "\n";
         }
    }
?>