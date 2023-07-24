<?php 
$Q = trim(fgets(STDIN));
for($i = 0; $i < $Q; $i++) {
    $N = trim(fgets(STDIN));
    $isPrime = true;
    for($j = 2; $j <= sqrt($N); $j++) {
        if($N % $j == 0) {
            $isPrime = false;
            break;
        }
    }
    echo $isPrime ? 'Yes' . PHP_EOL : 'No' . PHP_EOL;
}