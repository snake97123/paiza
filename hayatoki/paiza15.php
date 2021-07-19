<?php
    // 自分の得意な言語で
    // Let's チャレンジ！！
   $input_line = trim(fgets(STDIN));
   $ride_rate = floor(($input_line / 140) * 100);
   echo $ride_rate . "%";
?>