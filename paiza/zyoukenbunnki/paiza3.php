<?php
    $input = trim(fgets(STDIN));
    if($input % 3 == 0 && $input % 5 == 0){
        echo "FizzBuzz";
    } elseif ($input % 3 == 0) {
        echo "Fizz";
    } elseif ($input % 5 == 0) {
        echo "Buzz";
    } else {
        echo $input;
    }
?>