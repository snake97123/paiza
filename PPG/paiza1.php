<?php
    $due = intval(fgets(STDIN));
    if ($due <= 3) {
        echo "BOMB\n";
        exit(0);
    }
    echo "ONGOING\n";
?>