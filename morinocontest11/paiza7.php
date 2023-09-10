<?php
   list($n, $m) = array_map('intval', explode(' ', trim(fgets(STDIN))));
   
   $allCorrect = false;
   
   $correctCounts = array_fill(0, $n, 0);
   
   for($i = 0; $i < $m; $i++) {
       $answers = array_map('intval', explode(' ', trim(fgets(STDIN))));
       for($j = 0; $j < $n; $j++) {
           $correctCounts[$j] += $answers[$j];
       }
   }
   
   foreach($correctCounts as $count) {
       if($count == $m) {
           $allCorrect = true;
           break;
       }
   }
   
   if($allCorrect) {
       echo "Yes";
   } else {
       echo "No";
   }
?>