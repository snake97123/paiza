<?php
    $test = explode(" ", trim(fgets(STDIN)));
    $map_line = $test[0];
    $map_row = $test[1];
    $y = $test[2];
    $x = $test[3];
    $move_times = $test[4];
    
    $direction = 'N';
    
     for ($i = 0; $i < $map_line; $i++) {
         $map_arrays[$i] = str_split(trim(fgets(STDIN)));
         }
         $map_arrays[$y][$x] = "*";
         for ($i = 0; $i < $move_times; $i++) {
        $arrays = explode(" ", trim(fgets(STDIN)));
        $input_direction = $arrays[0];
        $moving_distance = $arrays[1];
        $stop_counter_number = 1;
 //条件分岐による判定を行う。       
        if($direction == 'N'){
            for($j = 0; $j < $moving_distance; $j++){
            
            if($input_direction == 'L' && $map_arrays[$y][$x-1] == '.'){
                $x--;
                $map_arrays[$y][$x] = "*";
                $direction = 'W';
                // echo $y . " ". $x . "\n";
            } elseif ($input_direction == 'R' && $map_arrays[$y][$x+1] == '.') {
                 $x++;
                   $map_arrays[$y][$x] = "*";
                 $direction = 'E';
                // echo $y . " ". $x . "\n";
            } else {
                $stop_counter_number = 0;
                
                
                break;
            }
          }
        //   echo $y . " " . $x . "\n";
      }
      elseif($direction == 'E'){
          for ($j = 0; $j < $moving_distance; $j++) {
              if($input_direction == 'L' && $map_arrays[$y-1][$x] == '.'){
              $y--;
              $map_arrays[$y][$x] = "*";
              $direction = 'N';
              // echo $y . " ". $x . "\n";
          } elseif ($input_direction == 'R' && $map_arrays[$y+1][$x] == '.') {
               $y++;
                 $map_arrays[$y][$x] = "*";
              $direction = 'S';
              // echo $y . " ". $x . "\n";
          } else {
              $stop_counter_number = 0;
              
              break;
          }
        }
      //   echo $y . " " . $x . "\n"; 
      }
      elseif($direction == 'S'){
          for ($j = 0; $j < $moving_distance; $j++) {
               if($input_direction == 'L' && $map_arrays[$y][$x+1] == '.'){
              $x++;
                $map_arrays[$y][$x] = "*";
              $direction = 'E';
              // echo $y . " ". $x . "\n";
          } elseif ($input_direction == 'R' && $map_arrays[$y][$x-1] == '.') {
               $x--;
                 $map_arrays[$y][$x] = "*";
              $direction = 'W';
              // echo $y . " ". $x . "\n";
          } else {
              $stop_counter_number = 0;
              
              break;
          }
        }
    }
    elseif($direction == 'W'){
      for ($j = 0; $j < $moving_distance; $j++) {
           if($input_direction == 'L' && $map_arrays[$y+1][$x] == '.'){
        $y++;
          $map_arrays[$y][$x] = "*";
        $direction = 'S';
      //   echo $y . " ". $x . "\n";
    } elseif ($input_direction == 'R' && $map_arrays[$y-1][$x] == '.') {
         $y--;
           $map_arrays[$y][$x] = "*";
        $direction = 'N';
      //   echo $y . " ". $x . "\n";
    } else {
        $stop_counter_number = 0;
        
        break;
    }
   
  }
   
  
}
if ($stop_counter_number == 0) {
    break;
}
       }
     foreach ($map_arrays as $arrays) {
         foreach ($arrays as $value){
             echo $value;
         }
         echo "\n";
     }
?>