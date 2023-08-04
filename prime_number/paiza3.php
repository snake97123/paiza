<?php

function is_prime($x) {
    if ($x < 2) {
        return false;
    }

    for ($i = 2; $i < intval(sqrt($x)) + 1; $i++) {
        if ($x % $i == 0) {
            return false;
        }
    }

    return true;
}

$ans = [];
for ($i = 3; $i < intval(sqrt(10**8)) + 1; $i += 2) {
    if (!is_prime($i * $i - 2)) {
        $ans[] = $i * $i;
    }
}

if (count($ans) == 0) {
    echo "paiza's conjecture is correct.\n";
} else {
    foreach ($ans as $a) {
        echo $a . "\n";
    }
}

?>
