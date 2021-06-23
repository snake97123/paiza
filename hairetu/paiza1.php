<?php
   $input_lines = explode(" ", trim(fgets(STDIN)));
   
   $target_number = $input_lines[0];
   $num = $input_lines[1];
   
   $arrays = explode(" ", trim(fgets(STDIN)));
   
   $counts = array_count_values($arrays);
   
   echo $counts[$target_number];
?>