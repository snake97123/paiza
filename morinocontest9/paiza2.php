<?php
    [$egg_count, $piriod] = explode(" ", trim(fgets(STDIN)));
    $egg_sum = $egg_count * $piriod;
    print($egg_sum); 
?>