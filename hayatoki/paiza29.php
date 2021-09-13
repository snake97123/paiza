<?php
    $input = trim(fgets(STDIN));
    $count = strlen($input);
    echo $input . "\n";
    for ($i = 0; $i < $count; $i++) {
         echo "^";
    }
?>