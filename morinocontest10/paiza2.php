<?php

for($i = 1; $i <= 9; $i++) {
    $name = trim(fgets(STDIN));
    if($i % 3 == 0) {
        echo $name . PHP_EOL;
    } else {
        echo $name . " ";
    }
}

?>