<?php
$first_str = trim(fgets(STDIN));
$second_str = trim(fgets(STDIN));
 
$first_str_length = strlen($first_str);
$second_str_length = strlen($second_str);
 
$dp = array_fill(0, $first_str_length + 1, array_fill(0, $second_str_length + 1, 0));
$dp[0][0] = 0;
for($i = 0; $i <= $first_str_length; $i++) {
    for($j = 0; $j <= $second_str_length; $j++) {
        if($i >= 1 && $j >= 1 && $first_str[$i - 1] == $second_str[$j - 1]){
          $dp[$i][$j] = max($dp[$i - 1][$j - 1] + 1, $dp[$i - 1][$j], $dp[$i][$j - 1]);
        }
        else if($i >= 1 && $j >= 1) {
          $dp[$i][$j] = max($dp[$i - 1][$j], $dp[$i][$j - 1]);
        }
        else if($i >= 1) {
          $dp[$i][$j] = $dp[$i - 1][$j];
        }
        else if($j >= 1) {
          $dp[$i][$j] = $dp[$i][$j - 1];
        }
    }
}
 
echo $dp[$first_str_length][$second_str_length] . PHP_EOL;
?>