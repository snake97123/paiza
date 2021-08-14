<?php
    $s = trim(fgets(STDIN));
    
    if($s == 'Friday'){
        echo('TGIF');
    } else {
        echo("Still" . " " . "$s");
    }
?>