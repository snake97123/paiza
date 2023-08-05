<?php
    
    $n = intval(trim(fgets(STDIN)));
    for ($i = 0; $i < $n; $i++) {
        $string = trim(fgets(STDIN));
        $hashValue = 0;
        for ($j = 0; $j < strlen($string); $j++) {
            $hashValue += ord($string);
        }
        $hashValue %= 100;
        echo $hashValue . "\n";
    }
?>