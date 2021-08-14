<?php
   $input_lines = explode(" ", trim(fgets(STDIN)));
   $y1 = $input_lines[0];
   $y2 = $input_lines[2];
   
   echo $y1 + $y2;
?>