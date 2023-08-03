<?php
$max = 6000000;
$is_prime = array_fill(0, $max + 1, true);
$is_prime[0] = $is_prime[1] = false;
for ($i = 2; $i <= sqrt($max); $i++) {
    if ($is_prime[$i]) {
        for ($j = $i * $i; $j <= $max; $j += $i) {
            $is_prime[$j] = false;
        }
    }
}

$N = intval(trim(fgets(STDIN)));
for ($i = 0; $i < $N; $i++) {
    $student_number = intval(trim(fgets(STDIN)));
    if ($is_prime[$student_number]) {
        echo "pass\n";
    } else {
        echo "failure\n";
    }
}
?>
