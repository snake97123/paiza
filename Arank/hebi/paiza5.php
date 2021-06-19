<?php
   $input_array = explode(" ", trim(fgets(STDIN)));
   
   $x = $input_array[0];
   $y = $input_array[1];
   $n = $input_array[2];
   $d = 'N';
   
   for ($i = 0; $i < $n; $i++) {
        $direction = trim(fgets(STDIN));
        
        if($d == 'N'){
            if($direction == 'L'){
                $x--;
                $d = 'W';
            } elseif($direction == 'R'){
                $x++;
                $d = 'E';
            }
            echo $x . " " . $y . "\n";
        } elseif ($d == 'E') {
            if($direction == 'L'){
                $y--;
                $d = 'N';
            } elseif($direction == 'R'){
                $y++;
                $d = 'S';
            }
            echo $x . " " . $y . "\n";
        } elseif ($d == 'S') {
            if($direction == 'L'){
                $x++;
                $d = 'E';
            } elseif($direction == 'R'){
                $x--;
                $d = 'W';
            }
            echo $x . " " . $y . "\n";
        } elseif ($d == 'W') {
            if($direction == 'L'){
                $y++;
                $d = 'S';
            } elseif($direction == 'R'){
              $y--;
              $d = 'N';
          }
          echo $x . " " . $y . "\n";
      }
 }
 
 