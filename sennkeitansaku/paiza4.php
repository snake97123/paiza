<?php
  $n = trim(fgets(STDIN));
  $num_array = explode(" ", trim(fgets(STDIN)));
  $k = trim(fgets(STDIN));
  
  rsort($num_array);
  $answer = $num_array[$k - 1];
  echo $answer;
?>