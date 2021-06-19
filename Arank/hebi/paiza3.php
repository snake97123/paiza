<?php
    //値の取得
    $test = explode(" ", trim(fgets(STDIN)));
    $map_line = $test[0];
    $map_row = $test[1];
    $y = $test[2];
    $x = $test[3];
    $move_times = $test[4];
    
    $direction = 'N';
    
    //for文を使用して配列をつくりmapの作成
    for ($i = 0; $i < $map_line; $i++) {
         $map_arrays[$i] = str_split(trim(fgets(STDIN)));
         
    }
    
    for ($i = 0; $i < $move_times; $i++) {
        $input_direction = trim(fgets(STDIN));
        
        if($direction == 'N'){
            if($input_direction == 'L' && $map_arrays[$y][$x-1] == '.'){
                $x--;
                $direction = 'W';
                echo $y . " ". $x . "\n";
            } elseif ($input_direction == 'R' && $map_arrays[$y][$x+1] == '.') {
                 $x++;
                 $direction = 'E';
                echo $y . " ". $x . "\n";
            } else {
                echo 'Stop';
                break;
            }
        }
        elseif($direction == 'E'){
            if($input_direction == 'L' && $map_arrays[$y-1][$x] == '.'){
                $y--;
                $direction = 'N';
                echo $y . " ". $x . "\n";
            } elseif ($input_direction == 'R' && $map_arrays[$y+1][$x] == '.') {
                 $y++;
                $direction = 'S';
                echo $y . " ". $x . "\n";
            } else {
                echo 'Stop';
                break;
            }
        }
        elseif($direction == 'S'){
            if($input_direction == 'L' && $map_arrays[$y][$x+1] == '.'){
                $x++;
                $direction = 'E';
                echo $y . " ". $x . "\n";
            } elseif ($input_direction == 'R' && $map_arrays[$y][$x-1] == '.') {
                 $x--;
                $direction = 'W';
                echo $y . " ". $x . "\n";
            } else {
                echo 'Stop';
                break;
            }
        }
        elseif($direction == 'W'){
          if($input_direction == 'L' && $map_arrays[$y+1][$x] == '.'){
              $y++;
              $direction = 'S';
              echo $y . " ". $x . "\n";
          } elseif ($input_direction == 'R' && $map_arrays[$y-1][$x] == '.') {
               $y--;
              $direction = 'N';
              echo $y . " ". $x . "\n";
          } else {
              echo 'Stop';
              break;
          }
      }
  }
  
  
?>