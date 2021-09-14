<?php
    $input = trim(fgets(STDIN));
    
    for ($i = 0; $i < 10; $i++) {
         if ($input > 9) {
            $input = 0;
            echo $input . "\n";
            $input++;
         } else {
          echo $input . "\n";
         $input++;
         }
        
    }
?>