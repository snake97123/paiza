<?php
   [$a, $b, $c] = explode(" ", trim(fgets(STDIN)));
   $min_value = min($a, $b, $c);
   $max_value = max($a, $b, $c);
   
   echo "{$min_value} {$max_value}";
?>