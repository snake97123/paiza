<?php
    $n = trim(fgets(STDIN));
    
    for ($i = 0; $i < $n; $i++) {
        $tenki = trim(fgets(STDIN));
         if ($tenki == 'forward') {
             echo 'Sunny' . "\n";
         } elseif ($tenki == 'reverse') {
             echo 'Rainy' . "\n";
         } elseif ($tenki == 'sideways') {
             echo 'Cloudy' . "\n";
         }
    }
?>