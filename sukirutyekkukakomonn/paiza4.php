<?php
    [$a, $b] = explode(" ", trim(fgets(STDIN)));
    $hands = trim(fgets(STDIN));
    
    $G = mb_substr_count($hands, "G");
    // echo($G);
    $C = mb_substr_count($hands, "C");
    $P = $a - $G - $C;
    
    $max_P = floor($b / 5);
    // echo($max_P);
    
    $max_win = 0;
    
    for ($i = 0; $i <= $max_P; $i++) {
         for ($j = 0; $j < $a - $i; $j++) {
              if (5 * $i + 2 * $j == $b) {
                  $win = min($G,$i) + min($P, $j) + min($C, $a - $i - $j);
                  $max_win = max($max_win, $win);
              }
         }
    }
    
    echo($max_win);
    
    
?>