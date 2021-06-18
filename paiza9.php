<?php
    $N = 10000;
    $input_numbers = explode(" ", trim(fgets(STDIN)));
    $number_a = $input_numbers[0];
    $number_b = $input_numbers[1];
    
    $N = $N / $number_a;
    $N = $N % $number_b;
    
    echo $N;
?>