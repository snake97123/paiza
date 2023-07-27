<?php

function gcd($a, $b) {
    if ($b == 0) {
        return $a;
    }
    return gcd($b, $a % $b);
}

list($a, $b) = array_map('intval', explode(' ', trim(fgets(STDIN))));
echo gcd($a, $b);

?>